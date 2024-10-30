"use strict";
/**
 * Created by maksim on 01.06.17.
 */

/**
 * Получить учетные данные пользователя в Лапуте
 * @returns {object}
 */
function getLaputaUserName(){
    return document.location.hostname;
}

/**
 * Получить электропочту текущего пользователя в админке вордпреса
 * getUserEmail().then(
 function(response){
                var response_decoded = JSON.parse(response);
                console.log('Response Email', response_decoded.user_email)
            },
 function(reject){console.log('Error', reject)}
 );
 * @returns {object}
 */
function getUserEmail(){
    return AjaxPost( 'get-user-email', email_nonce );
}

/**
 * Получить учетные данные пользователя в Лапуте
 * @returns {object}
 */
function getLaputaPassword() {
    return AjaxPost('get-laputa-password', get_password_nonce);
}

/**
 * Сохранить учетные данные пользователя в Лапуте
 */
function setLaputaPassword(password){
    return AjaxPost( 'set-laputa-password', set_password_nonce, {'laputa-password': password} );
}

/**
 * Промисифицированная функция для ассинхронного получения данных пост-методом
 * @param action слаг метода админки вордпрес
 * @param nonce токен метода
 * @param additional_data
 * @returns {Promise}
 * @constructor
 */
function AjaxPost(action, nonce, additional_data) {

    var post_data = {
        'action': action,
        'wpamin_nonce': nonce
    };

    if(additional_data){ Object.assign(post_data, additional_data) }


    return new Promise(function(resolve, reject) {

        jQuery.post(
            ajaxurl,
            post_data,
            function (data) {
                resolve(data);
            }
        ).fail(
            function (err) {
                reject(err);
            }
        );
    });
}



var Helper = {
    /**
     * Проверить существует ли функция
     * @thankTo https://ru.stackoverflow.com/users/481/reinraus
     * @param functionToCheck
     * @returns {boolean}
     */
    isFunction: function (functionToCheck)  {
        return functionToCheck && typeof window[functionToCheck] === 'function';
    }
};



var Ambassador = {

    // Home Laputa Url
    laputa_home_page_url: 'https://laputa.seomarket.ua/',
    laputa_api_url: 'https://laputa.seomarket.ua/api/',
    laputa_ambassador_container_id: 'laputa-ambassador-container',
    laputa_partner_id_data_attribute_name: 'data-partner-id',

    run: function () {
        this.checkRequired();
        this.load_styles();
        this.load_stylesheet();
        this.load_container();
        this.load_js();
    },

    get_laputa_api_url: function () {
        return this.laputa_api_url;
    },

    get_laputa_home_page_url: function () {
        return this.laputa_home_page_url;
    },

    get_laputa_template_url: function (template_name) {
        return this.get_laputa_home_page_url() + 'embeder/buildin/template?template_name=' + template_name;
    },

    get_user_email: function () {
        return getUserEmail();
    },

    set_laputa_password: function (password) {
        return setLaputaPassword(password);
    },

    get_laputa_password: function () {
        return getLaputaPassword();
    },

    check_ability_to_save_password: function () {
        return Helper.isFunction('getLaputaPassword')
            && Helper.isFunction('setLaputaPassword')
            && Helper.isFunction('getUserEmail');
    },

    // Load stylesheet
    load_stylesheet: function () {
        var link = document.createElement("link");
        link.setAttribute('rel', 'stylesheet');
        link.setAttribute('type', 'text/css');
        link.setAttribute('href', this.laputa_home_page_url + 'embeder/css/build-in-laputa-style.css');
        document.getElementsByTagName('head')[0].appendChild( link );
    },

    // Load bootstrap
    load_styles: function () {

        // CSS
        var bootstrap_link = document.createElement("link");
        bootstrap_link.setAttribute('rel', 'stylesheet');
        bootstrap_link.setAttribute('type', 'text/css');
        bootstrap_link.setAttribute('crossorigin', 'anonymous');
        bootstrap_link.setAttribute('integrity', 'sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u');
        bootstrap_link.setAttribute('href', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        document.getElementsByTagName('head')[0].appendChild( bootstrap_link );

    },

    // Load bootstrap
    load_js: function () {

        // JS
        var angular_link = document.createElement("script");
        angular_link.setAttribute('src', 'https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.4/angular.min.js');

        document.getElementsByTagName('head')[0].appendChild( angular_link );

        var google_api_lib_link = document.createElement("script");
        google_api_lib_link.setAttribute('async', '');
        google_api_lib_link.setAttribute('defer', '');
        google_api_lib_link.setAttribute('src', 'https://apis.google.com/js/api.js');

        document.getElementsByTagName('head')[0].appendChild( google_api_lib_link );


        var app_link = document.createElement("script");
        app_link.setAttribute(
            'src',
            this.laputa_home_page_url + "embeder/build-in-laputa/app.js"
        );
        setTimeout(function() {
            document.getElementsByTagName('body')[0].appendChild( app_link );
        }, 450);
    },

    // Check required implementation
    checkRequired: function () {
        var required_functions = ['getFeedUrl'];

        var not_implemented_functions = [];

        required_functions.forEach(function (function_name) {
            if( ! Helper.isFunction( function_name )){
                not_implemented_functions.push( function_name );
            }
        });

        if( not_implemented_functions.length > 0 ){
            throw new NotImplementedError(
                "В партнерском js-коде не реализованы обязательные методы: " +
                not_implemented_functions.join(', ')
            );
        }

    },

    /**
     * Получить логин пользователя в домашней системе
     * @returns {Object}
     */
    getHomeUserId: function() {
        return Helper.isFunction('getLaputaUserName')
            ? getLaputaUserName()
            : document.location.hostname;
    },

    /**
     * Получить идентификатор партнера
     * @returns {string}
     */
    getPartnerId: function() {
        return document
            .getElementById( this.laputa_ambassador_container_id )
            .getAttribute( this.laputa_partner_id_data_attribute_name );
    },

    // Load container
    load_container: function () {

        var container = document.getElementById( this.laputa_ambassador_container_id );
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                container.innerHTML = xhr.responseText;
            }
        };
        xhr.onerror = function() {
            console.log( 'Ошибка загрузки встраиваемой Лапуты. Status: ', this.status );
        };

        xhr.open(
            "GET",
            this.laputa_home_page_url +
            "embeder/buildin" +
            '?home_user_id=' + this.getHomeUserId() +
            '&partner_id=' + this.getPartnerId(),
            true
        );
        xhr.send();
    },

    put_backup_message: function () {
        var container = document.getElementById(this.laputa_ambassador_container_id);
        container.innerHTML = '<blockquote>Встроенная Лапута скоро появится. ' +
            'Нужно только исправить некоторые ошибки. ' +
            'Детали в консоли броузера</blockquote>';
    }
};


try{
    Ambassador.run();
}catch (e) {
    Ambassador.put_backup_message();
    // console.log(e);
    throw e;
}






























function NotImplementedError(message) {
    this.name = "NotImplementedError";
    this.message = (message || "");
}
NotImplementedError.prototype = AmbassadorError.prototype;

function AmbassadorError(message) {
    this.name = "NotImplementedError";
    this.message = (message || "");
}
AmbassadorError.prototype = Error.prototype;
