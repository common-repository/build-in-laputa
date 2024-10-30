=== Woo Build-in Laputa ===
Contributors: zinchenkomax
Donate link: laputa.seomarket.ua
Tags: contextual advertising, adwords, seomarket, dancer, laputa, xml-feed, api, schedule
Requires at least: 3.0.1
Tested up to: 4.8
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The build-in version of a popular Laputa-tool-box for context advertising in Google Adwords.

== Description ==

Context advertising for today remains one of the main source of sales for most online stores.

There is a contextual advertisement in which it is advertised in its entirety, that is, when
clicking on an advertisement, the main page of the site opens. There is a category contextual
advertising in which a page with a certain category of goods is advertised. There is
advertising for goods.

The cost of contextual advertising is determined by the auction. If your competitor wants
to advertise their products or services in a related subject, then the cost of your advertising
 will be determined by the auction. That is, the advertising platform will show
 the advertisement of the advertiser who has assigned a higher price for their advertising.

If we talk about search advertising in google (http://www.google.com.ua/intl/en/adwords/),
the advertiser assigns the maximum bid for one click of the visitor on advertising.
An ad in Google search works according to the user's search phrase. Here are examples
of search phrases: "addresses of cinema", "buy smartphone london",
"washing machine BOSCH WTW85460PL". And when setting up advertising, the advertiser specifies
which phrases ads should show.

Each search phrase has a frequency indicator, it reflects how often users of the google.com
search site use this phrase. Common phrases are shown more often, specific phrases are shown
less often. Phrases that users use often are called high-frequency phrases. Phrases that are
used rarely, low-frequency. Usually, to display advertisements for high-frequency phrases,
you must assign a high maximum bid for a click, so advertising will cost more. According to
low-frequency phrases, advertising will be cheaper.

At the same time, it is necessary to pay attention to the fact that if a user searches
for a particular model of a product and he opens a page on the website of the online store
of this particular product, then the probability that he will buy this product will
be very high. Much higher than if he opened the main page of the online store and the user
would have to look for his model in the catalog.

Also what turns out? Goods advertising is cheaper, and its efficiency is much higher.
The conclusion is obvious - you need to use goods and category contextual advertising.

But there is one problem. To add a Product Listing Ad, you must enter the product name in
the title of the ad, a link to the page with this product, preferably its price.
And if the goods are 500 pieces? Or 1000 pieces? Or 5 thousand pieces?

And after all some goods can end or at them the price can change. In this case, the support
of a commodity advertising campaign becomes too time-consuming task. So laborious that it
 will not be for the strength and the whole team of marketers.

The problem has a solution. Robots come to the rescue. You can automate the process of managing
 goods contextual advertising.

This is easily handled by the robot from the Laputa tool box. Such a robot on Laputa
is called "Dancer".

Plugin Build-in Laputa will create for you a personal robot Dancer on the server of Laputa.

=== Optional dependent plugin ===
To work, the Build-in Laputa plugin needs another WooCommerce Yml Exporter plugin, which will
create a fresh file with a list of your products.

=== What the Build-in Laputa plugin does ===
The dancer will be launched every day, upload a fresh list of products from your online
store and update the product listings in your Google Adwords account.

The Build-in Laputa plugin does the following. On the plugin page in the admin panel wordpress
(wp-admin) a javascript application is used to manage the robot "Dancer" on the server of
Laputa. When the application is launched for the first time, the application registers
a user with the name coinciding with the domain name of your online store and a random password
 on the Laputa server. The password is saved in the Wordpress database. Next, the application
 creates a robot "Dancer" on the server of Laputa (laputa.seomarket.ua) and adds this robot
 to the conveyor for execution on a schedule.

When creating the Dancer, the application will ask you for access to your Adwords account,
spreadsheets on the Google Drive, and Analytics account. After your access approval, a card
with the privileged access of the Dancer from the Laputa server to your Adwords account will
be created on the Laputa website.

The dancer will be launched on the server of Laputa once a day. The dancer will upload
an xml file with the list of products prepared by WooCommerce Yml Exporter at each launch
from the server of your online store.
The dancer will form separate ads for Adwords for each of your products according to the
medium-optimal pattern.
The dancer will compare the generated ads with the existing ads in your Adwords account.
Will apply changes to your Adwords account.

If the product changed its price, the Dancer will change the title of this ad.
If the product just appeared, the Dancer will add an ad for this product.
If the product is disappeared, the Dancer will stop all keys for this product.

On subsequent launches, the javascript application in the Build-in plug-in Laputa will use
the saved password to access the Laputa server and obtain information about the success of
the Dancer's work for you.

=== What else do you need to use the plugin ===
To conduct contextual advertising, you need to have basic knowledge in this area
(https://en.wikipedia.org/wiki/Content_Advertisement https://support.google.com/adwords/).

You need to cash-fill your Adwords account, which will be spent when displaying ads.

You will need to monitor the costs of advertising and adjust bids for individual key queries
or ad groups. Key inquiries The dancer forms in phrase compliance. Therefore, idle triggers
of key queries on irrelevant search queries are possible. You will need to see this and adjust
 the bids in your Adwords account.

Automatic contextual advertising campaigns have their own characteristics. If you want to stop
 showing your ad for a particular product or keyword, then you need to reduce your bid to it
 as low as possible. If you just stop the ad group, the robot will turn it on the next start.
 Robot Dancer does not touch rates.

At the moment, the Build-in Laputa plug-in works only with online stores
running Wordpress + WooCommerce.

If everything goes as planned, then for the publication of Product Ads in Adwords, it will
be enough to click on the "Launch Advertising" button on the Build-in Laputa plug-in in
the Wordpress admin panel.

If something goes wrong, unsubscribe in the comments to the plugin. The more details will
be described about the problem that you had to face, the higher the probability of solving
this problem.


﻿Контекстная реклама на сегодня остается одним из основных источником продаж для большинства
 интернет-магазинов.

Бывает контекстная реклама, в которой рекламируется целиком, то есть при клике по рекламному
объявлению открывается главная страница сайта. Бывает категорийная контекстная реклама,
в которой рекламируется страница с определенной категорией товаров. Бывает реклама товарная.

Стоимость контекстной рекламы определяется аукционом. Если ваш конкурент хочет рекламировать
свои товары или услуги в близкой вам тематике, то стоимость вашей рекламы будет определяться
аукционом. То есть рекламная площадка будет показывать рекламу того рекламодателя, кто назначил
 выше допустимую цену за свою рекламу.

Если говорить по поисковую рекламу в google (http://www.google.com.ua/intl/ru/adwords/),
то рекламодатель назначает максимальную ставку за один клик посетителя по рекламе.
Рекламное объявление в поиске гугл срабатывает в зависимости от введенной пользователем
поисковой фразы. Вот примеры поисковых фраз: «адреса кинотеатров киев», «купить смартфон киев»,
«стиральная машина BOSCH WTW85460PL». И при настройке рекламы рекламодатель указывает по каким
 фразам должна показываться реклама.

У каждой поисковой фразы есть показатель частотности, он отражает насколько часто пользователи
поискового сайта google.com используют эту фразу. Общие фразы показываются чаще, конкретные
фразы показываются реже. Фразы, которые пользователи используют часто, называют
высокочастотными. Фразы, которые используют редко, низкочастотными. Обычно для показа
рекламных объявлений по высокочастотным фразам необходимо назначать высокую максимальную цену
клика, соответственно рекламу будет стоить дороже. По низкочастотным фразам реклама
 соответственно будет стоить дешевле.

При этом необходимо обратить внимание на тот факт, что если пользователь ищет конкретную
модель товара, и ему по рекламе откроется страница на сайте интернет-магазина  конкретно этого
 товара, то вероятность того, что он купит этот товара будет очень высокой. Намного выше,
 чем если бы ему открылась главная страница интернет-магазина и пользователю пришлось бы искать
  свою модель по каталогу.

И что получается? Товарная реклама стоит дешевле, а эффективность её значительно выше.
Вывод очевиден — нужно использовать товарную и категорийную контекстную рекламу.

Но есть одна проблема. Чтобы добавить товарное объявление, необходимо в заголовке объявления
указать название товара, ссылку на страницу с этим товаром, желательно его цену. А если товаров
 500 штук? Или 1000 штук? Или 5 тысяч штук?

А ведь некоторые товары могут закончиться или у них может измениться цена. В таком случае
поддержка товарной рекламной кампании становится слишком трудоемкой задачей. Настолько
трудоемкой, что не будет по силам и целой команде маркетологов.

Есть решение такой задачи. На помощь приходят роботы. Можно автоматизировать процесс
управления товарной контекстной рекламой.

С  этим легко справляется робот из ящика инструментов Лапута. Такой робот на Лапуте
называется «Танцор».

Плагин Build-in Laputa создаст для вам персонального робота Танцора на сервере Лапуты.

=== Дополнительный зависимый плагин ===
Для работы плагину Build-in Laputa нужен ещё один плагин WooCommerce Yml Exporter, который
будет формировать свежий файл с перечнем товаров.

=== Что делает плагин ===
Танцор будет запускаться каждый день, скачивать с сайта вашего интернет магазина свежий
перечень товаров и актуализировать товарные объявления в  вашем аккаунте Google Adwords.

Плагин  Build-in Laputa делает свою работу следующим образом. На странице плагина в панели
администратора wordpress (wp-admin) загружается javascript-приложение для управления роботом
«Танцором» на сервере Лапуты. При первом запуске приложение регистрирует на сервере Лапуте
пользователя с именем совпадающим с доменным именем вашего интернет-магазина
и случайным паролем. Пароль сохраняется в базе данных Wordpress. Далее приложение создает
робота «Танцора» на сервере Лапуты (laputa.seomarket.ua) и добавляет этого робота в конвеер
для выполнения по расписанию.

При создании Танцора приложение запросит у вас доступ к вашему аккаунту Adwords, таблицам
на диске Google Drive и аккаунту Analytics. После вашего одобрения доступа, на сайте Лапуты
будет создана карточка с наделенными привилегиями доступа Танцора с сервера Лапуты к вашему
аккаунту Adwords.

Танцор будет запускаться на сервере Лапуты один раз в сутки. Танцор при каждом запуске будет
скачивать с сервера вашего интернет-магазина xml-файл с перечнем товаров, подготовленный
WooCommerce Yml Exporter.
Танцор будет формировать отдельные объявления для Adwords для каждого вашего товара по
средне-оптимальному шаблону.
Танцор будет сравнивать сгенерированные объявления с существующими объявлениями в вашем
аккаунте Adwords. Будет применять изменения в вашем аккаунте Adwords.

Если товар оменял цену, то Танцор изменит заголовок этого объявления.
Если товар только появился, то Танцор добавит объявление для этого товара.
Если товар пропал, то Танцор остановит все ключи для объявления этого товара.

При последующих запусках javascript-приложение в плагине  Build-in Laputa будет использовать
сохраненный пароль для доступа к серверу Лапуты и получения информации о успешностиработы
Танцора для вас.

=== Что вам ещё нужно для использования плагина ===
Для ведения контекстной рекламы вам необходимо обладать базовыми знаниями в этой области
(https://ru.wikipedia.org/wiki/Контекстная_реклама https://support.google.com/adwords/).

Вам необходимо самостоятельно пополнять свой счет Adwords, который будет расходоваться при
показе рекламы.

Вам необходимо будет следить за расходами на рекламу и корректировать ставки на отдельные
ключевые запросы или группы объявлений. Ключевые запросы Танцор формирует во фразовом
соответствии. Поэтому возможны холостые срабатывания ключевых запросов по нерелевантным
поисковым запросам. Вам необходимо будет увидеть это и отрегулировать ставки в аккаунте Adwords.

 Автоматические контекстные рекламные кампании имеют свои особенности. Если вы захотите
 остановить показы вашего объявления по определенному товару или ключевой фразе, то вам нужно
 уменьшить ставку на него до минимально возможной. Если вы просто остановите группу объявлений,
  то робот включит его при следующем запуске. Робот Танцор не трогает ставки.

В данный момент плагин Build-in Laputa работает только с интернет-магазинами под управлением
Wordpress+WooCommerce.

Если все пойдет так, как задумано, то для публикации товарных объявлений в Adwords,достаточно
будет нажать на кнопку «Запустить рекламу» на странице плагина Build-in Laputa в панели
администратора Wordpress.

Если что-то пойдет не так, отписывайтесь в комментариях к плагину. Чем подробнее будет описана
 проблема, с которой вам пришлось столкнуться,тем выше будет вероятность решения этой проблемы.

== Installation ==

1. Upload `woo-buildin-laputa.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Install and activate required WooCommerce Yml Exporter plugin
4. Press "Start advertising" button


== Screenshots ==

1. Plugin start screen
2. Result screen

== Changelog ==

= 1.0 =
* init
