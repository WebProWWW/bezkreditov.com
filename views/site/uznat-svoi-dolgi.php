<?php

use app\helpers\Url;
use yii\helpers\Json;
use app\models\FsspRegion;

/* @var $this yii\web\View */
/* @var $city app\models\City */

$this->params['breadcrumbs'] = ['Узнать свои долги'];

$this->title = 'Проверка задолженности перед ФССП';

$this->params['description'] = 'Даже контролируя оплату по обязательствам и штрафам, можно допустить просрочку, стать ответчиком по гражданскому или административному делу. Своевременная проверка задолженности ФССП позволит избежать выплаты исполнительного сбора, штрафных санкций, ареста имущества, лишения прав и запрета на выезд за границу. На нашем сайте вы можете воспользоваться удобными онлайн-сервисами, позволяющими получить информацию о задолженности не выходя из дома.';



?>
<section class="section bg">
    <div class="container">
        <h1 class="center">Проверка задолженности перед ФССП</h1>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <!-- VUE-APP-FSSP TODO Cache data -->
        <div
            class="js-vue-app-fssp"
            data-action-search="<?= Url::to(['site/fssp-search']) ?>"
            data-region='<?= Json::encode([
                'options' => FsspRegion::findAllRegions(),
                'current' => $city->fsspRegion,
            ]) ?>'
        ></div>
        <!-- / VUE-APP-FSSP -->
    </div><!-- .container -->
</section><!-- .section -->

<section class="section bg">
    <div class="container">
        <h2 class="h1">Задайте вопрос юристу бесплатно</h2>
        <?= $this->render('-form-consult') ?>
    </div><!-- .container -->
</section><!-- .section -->

<section class="section">
    <div class="container">
        <h3 class="h2">Узнай задолженность в ФССП: быстро, достоверно, конфиденциально</h3>
        <p>Даже контролируя оплату по обязательствам и штрафам, можно допустить просрочку, стать ответчиком по гражданскому или административному делу. Своевременная проверка задолженности ФССП позволит избежать выплаты исполнительного сбора, штрафных санкций, ареста имущества, лишения прав и запрета на выезд за границу. На нашем сайте вы можете воспользоваться удобными онлайн-сервисами, позволяющими получить информацию о задолженности не выходя из дома.</p>
        <h3 class="h2">Проверка задолженности ФССП</h3>
        <p>Самым объективным способом узнать свою задолженность по исполнительному производству является личное обращение к приставам. Для этого нужно знать, в каком подразделении ведется дело, кто из должностных лиц ФССП уполномочен давать такую информацию. Если вы не получали судебных повесток или постановления о возбуждении производства, можно упустить время на обжалование, срок на добровольное погашение долга.</p>
        <p>Кроме личного визита к приставам, проверить задолженность ФССП России можно через онлайн-сервисы. В зависимости от характера обязательств, вы можете:</p>
        <ul>
            <li>посмотреть задолженность ФССП по штрафам на сайте ГИБДД;</li>
            <li>уточнить информацию о возбужденных производствах через базу данных должников на сайте ФССП;</li>
            <li>проверить наличие запрета на регистрационные действия в ГИБДД, что также может свидетельствовать о наличии долгов;</li>
            <li>уточнить о наличии ограничения на выезд за границу, которое вводится в исполнительном производстве.</li>
        </ul>
        <p>Чтобы не искать информацию на разных порталах, заполняя множество форм, вы можете воспользоваться онлайн-сервисами на нашем сайте. Проверить задолженность ФССП можно по фамилии, ИНН, дате рождения, иным данным. Информация о задолженности будет полностью соответствовать официальным данным государственных органов.</p>
        <h3 class="h2">Как узнать свою задолженность</h3>
        <p>Задолженность в ФССП отражается в официальных базах данных сразу после возбуждения исполнительного производства. Соответствующее постановление пристав выносит по заявлению взыскателя, направляет документ участникам дела. Неполучение постановления не освобождает от обязанности погашения долга. Поэтому, своевременно получив информацию о задолженности, вы сможете быстро погасить ее, предотвратить или снять арест с имущества, разблокировать счета и карты, избежать иных проблем.</p>
        <h3 class="h2">Узнать задолженность по фамилии</h3>
        <p>Одним из обязательных идентификаторов личности человека является фамилия. Эти данные используются и при выдаче исполнительных листов, возбуждении производства в ФССП. Чтобы узнать задолженность по фамилии через наш сервис, нужно знать еще и имя. Также в форме указываются данные о регионе. Желательно указать дату рождения, чтобы исключить совпадения с однофамильцами.</p>
        <h3 class="h2">Поиск задолженности по ИНН</h3>
        <p>Для юридических лиц одним из обязательных идентификаторов является ИНН. Чтобы проверить задолженность предприятия в ФССП, нужно по ИНН узнать его точное наименование. Такие данные доступны на сайте налоговой службы. Название организации и регион ее деятельности нужно указать в форме на нашем сайте, получить данные о текущих долгах по исполнительным производствам.</p>
        <p>Можно получить сведения только о задолженности по налогам и сборам. Поиск задолженности по ИНН возможен через Личный кабинет налогоплательщика. Эта информация может не совпадать с Базой данных приставов, так как узнать задолженность ФССП через сайт можно только по возбужденным исполнительным производствам.</p>
        <h3 class="h2">Посмотреть задолженность</h3>
        <p>Через наши сервисы или на сайте приставов можно не только проверить долг ФССП, но и контролировать его погашение. После удержаний любой суммы приставы обязаны внести соответствующие изменения в Базу данных должников. Эта информация может обновиться не мгновенно, а спустя несколько дней. Если с момента платежа прошло достаточно много времени (например, несколько недель), а в Базе данных все еще висит прежний долг, требуйте от пристава разъяснений, либо обжалуйте их действия.</p>
        <h3 class="h2">Проверить задолженность в ФССП</h3>
        <p>Как узнать задолженность, если вы точно знаете, что возбуждено исполнительное производство, однако онлайн-сервисы не выдают информацию? Это возможно, если приставы не внесли сведения в Базу данных должников, либо ошибочно указали там другого человека. Узнать задолженность приставам в этом случае можно через должностное лицо, ведущее дело.</p>
        <p>На нашем сайте вы можете найти контактные и адресные данные, телефоны всех Управлений и подразделений ФССП. Эту информацию можно использовать для направления письменного запроса или личного обращения к приставам. По телефону ФССП узнать долг нельзя, так как это не позволяет идентифицировать личность человека. При личном обращении вам обязаны не только сообщить обо всех возбужденных производствах, но и дать возможность ознакомиться с делом. Все необходимые заявления вы можете найти на нашем сайте.</p>
        <h3 class="h2">Узнать долг ФССП через наш сайт - быстро и удобно!</h3>
        <p>Вы можете проверить задолженность через сайт ФССП России, однако эта информация будет неполной. Только наши сервисы даются возможность убедиться в отсутствии штрафов ГИБДД, проверить запреты и ограничения, введенные для должника. Что еще удобнее, вы можете сразу погасить задолженность без визитов в банк или к приставам. По всем возникшим вопросам наши юристы окажут бесплатную консультацию, разъяснят порядок действий в исполнительном производстве, правила подачи жалоб на должностных лиц ФССП.</p>
        <p>Узнай свою задолженность прямо сейчас! Для этого достаточно указать фамилию и имя, регион проживания и дату рождения. Мы гарантируем конфиденциальность сведений, которые вы указываете в форме поиска.</p>
    </div><!-- .container -->
</section><!-- .section -->

<div class="block-divider bg"></div>