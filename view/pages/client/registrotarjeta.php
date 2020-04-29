<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head><meta charset="utf-8">
        <meta http-equiv="X-UA_Compatible" content="IE=edge"><!--Permite al navegador establecer un modo de compatibilidad-->
        <meta name="format-detection" content="telephone=no"/><!-- Desactivar la detección automática de números de teléfono -->
        <meta name="viewport" content="width=device-width, initial-scale = 1, , shrink-to-fit=no"> <!--Se ajusta al tamaño de la pantalla-->
        <link rel="icon" href="" type="image/x-icon"> <!--Icono de la pestaña-->

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600">
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <!--<link rel="stylesheet" href="../../css/form-elements.css">-->
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/mediaqueries.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../../img/icon/favicon.png">

        <title>Vehiculos</title>

        <!--Script de las fuentes-->
        <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"  crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body>
        <!-- Top menu -->
        <div class="navbar" style="height: 60px; width: 100% ">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li><a class="nav-link " href="vehiculos.php">Vehiculos</a></li>                            
                            <li><a class="nav-link" href="client.php">Gestionar reserva</a></li>
                            <li><a class="nav-link" href="profile.php">Perfil</a></li>
                            <!--<li><a class="nav-link scroll-link" href="#footer">Contáctenos</a>-->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Portfolio -->
        <div class="section-container" >
            <div class="container"> 
                    <div class="modal__content">
                        <div class="col" >
                            <h2 style="padding-bottom: 30px">Ralizar pago</h2>
                            <form>
                                <ul class="form-list">
                                    <li class="form-list__row">
                                        <label>Nombre</label>
                                        <input type="text" name="name" required="" >
                                    </li>
                                    <li class="form-list__row">
                                        <label>Número de tarjeta</label>
                                        <div id="input--cc" class="creditcard-icon">
                                            <input type="text" name="cc_number" required="" />
                                        </div>
                                    </li>
                                    <li class="form-list__row form-list__row--inline">
                                        <div>
                                            <label>Expira</label>
                                            <div class="form-list__input-inline">
                                                <input type="text" name="cc_month" placeholder="MM"  pattern="\\d*" minlength="2" maxlength="2" required="" />
                                                <input type="text" name="cc_year" placeholder="YY"  pattern="\\d*" minlength="2" maxlength="2" required="" />
                                            </div>
                                        </div>
                                        <div>
                                            <label>
                                                CVC

                                                <a href="#cvv-modal" class="button--transparent modal-open button--info">
                                                    <svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g> <path fill="#35a4fb" d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M8,13c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1s1,0.4,1,1 C9,12.6,8.6,13,8,13z M9.5,8.4C9,8.7,9,8.8,9,9v1H7V9c0-1.3,0.8-1.9,1.4-2.3C8.9,6.4,9,6.3,9,6c0-0.6-0.4-1-1-1 C7.6,5,7.3,5.2,7.1,5.5L6.6,6.4l-1.7-1l0.5-0.9C5.9,3.6,6.9,3,8,3c1.7,0,3,1.3,3,3C11,7.4,10.1,8,9.5,8.4z"></path> </g></svg>
                                                    <span class="visuallyhidden">What is CVV?</span>
                                                </a>
                                            </label>
                                            <input type="text" name="cc_cvc" placeholder="123" pattern="\\d*" minlength="3" maxlength="4" required="" />
                                        </div>
                                    </li>
                                    <li class="form-list__row form-list__row--agree">
                                        <label>
                                            <input type="checkbox" name="save_cc" checked="checked">
                                            Guardar tarjeta para pagos futuros
                                        </label>
                                    </li>
                                    <li>
                                        <button type="submit" class="button">Guardar</button>
                                    </li>
                                </ul>
                            </form>
                        </div> <!-- END: .modal__content -->
                    </div>
                    <!-- END: .modal__container -->
                </div> <!-- END: .modal -->
            </div>
        </div>
    </div>
    <script>
        /******/ (function (modules) { // webpackBootstrap
            /******/ 	// The module cache
            /******/ 	var installedModules = {};

            /******/ 	// The require function
            /******/ 	function __webpack_require__(moduleId) {

                /******/ 		// Check if module is in cache
                /******/ 		if (installedModules[moduleId])
                    /******/ return installedModules[moduleId].exports;

                /******/ 		// Create a new module (and put it into the cache)
                /******/ 		var module = installedModules[moduleId] = {
                    /******/ 			exports: {},
                    /******/ 			id: moduleId,
                    /******/ 			loaded: false
                            /******/};

                /******/ 		// Execute the module function
                /******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

                /******/ 		// Flag the module as loaded
                /******/ 		module.loaded = true;

                /******/ 		// Return the exports of the module
                /******/ 		return module.exports;
                /******/ 	}


            /******/ 	// expose the modules object (__webpack_modules__)
            /******/ 	__webpack_require__.m = modules;

            /******/ 	// expose the module cache
            /******/ 	__webpack_require__.c = installedModules;

            /******/ 	// __webpack_public_path__
            /******/ 	__webpack_require__.p = "/scripts/dist/";

            /******/ 	// Load entry module and return exports
            /******/ 	return __webpack_require__(0);
            /******/ })
                /************************************************************************/
                        /******/([
                            /* 0 */
                            /***/ function (module, exports, __webpack_require__) {

                                __webpack_require__(1);


                                /***/ },
                            /* 1 */
                            /***/ function (module, exports, __webpack_require__) {

                                'use strict';

                                var _creditCardType = __webpack_require__(2);

                                var _creditCardType2 = _interopRequireDefault(_creditCardType);

                                function _interopRequireDefault(obj) {
                                    return obj && obj.__esModule ? obj : {default: obj};
                                }

                                $(document).on('input change', '#input--cc input', function () {
                                    var ccNum = $(this).val();
                                    var ccType = (0, _creditCardType2.default)(ccNum);

                                    if (!ccNum.length || typeof ccType === "undefined" || !ccType.length) {
                                        $('#input--cc').removeClass().addClass('creditcard-icon');
                                        return;
                                    }

                                    var creditcardType = ccType[0].type;

                                    var ccTypes = {
                                        'american-express': 'AE',
                                        'master-card': 'MC',
                                        'visa': 'VI',
                                        'discover': 'DI'
                                    };

                                    $('#input--cc').removeClass().addClass('creditcard-icon').addClass('creditcard-icon--' + creditcardType); //set creditcard icon

                                    // select creditcard type
                                    $(".creditcard-type > select").val(ccTypes[creditcardType]);
                                    // set the creditcard type <select> to the value entered
                                });

                                /***/ },
                            /* 2 */
                            /***/ function (module, exports) {

                                'use strict';

                                var types = {};
                                var VISA = 'visa';
                                var MASTERCARD = 'master-card';
                                var AMERICAN_EXPRESS = 'american-express';
                                var DINERS_CLUB = 'diners-club';
                                var DISCOVER = 'discover';
                                var JCB = 'jcb';
                                var UNIONPAY = 'unionpay';
                                var MAESTRO = 'maestro';
                                var CVV = 'CVV';
                                var CID = 'CID';
                                var CVC = 'CVC';
                                var CVN = 'CVN';
                                var testOrder = [
                                    VISA,
                                    MASTERCARD,
                                    AMERICAN_EXPRESS,
                                    DINERS_CLUB,
                                    DISCOVER,
                                    JCB,
                                    UNIONPAY,
                                    MAESTRO
                                ];

                                function clone(x) {
                                    var prefixPattern, exactPattern, dupe;

                                    if (!x) {
                                        return null;
                                    }

                                    prefixPattern = x.prefixPattern.source;
                                    exactPattern = x.exactPattern.source;
                                    dupe = JSON.parse(JSON.stringify(x));
                                    dupe.prefixPattern = prefixPattern;
                                    dupe.exactPattern = exactPattern;

                                    return dupe;
                                }

                                types[VISA] = {
                                    niceType: 'Visa',
                                    type: VISA,
                                    prefixPattern: /^4$/,
                                    exactPattern: /^4\d*$/,
                                    gaps: [4, 8, 12],
                                    lengths: [16],
                                    code: {
                                        name: CVV,
                                        size: 3
                                    }
                                };

                                types[MASTERCARD] = {
                                    niceType: 'MasterCard',
                                    type: MASTERCARD,
                                    prefixPattern: /^(5|5[1-5]|2|22|222|222[1-9]|2[3-6]|27[0-1]|2720)$/,
                                    exactPattern: /^(5[1-5]|222[1-9]|2[3-6]|27[0-1]|2720)\d*$/,
                                    gaps: [4, 8, 12],
                                    lengths: [16],
                                    code: {
                                        name: CVC,
                                        size: 3
                                    }
                                };

                                types[AMERICAN_EXPRESS] = {
                                    niceType: 'American Express',
                                    type: AMERICAN_EXPRESS,
                                    prefixPattern: /^(3|34|37)$/,
                                    exactPattern: /^3[47]\d*$/,
                                    isAmex: true,
                                    gaps: [4, 10],
                                    lengths: [15],
                                    code: {
                                        name: CID,
                                        size: 4
                                    }
                                };

                                types[DINERS_CLUB] = {
                                    niceType: 'Diners Club',
                                    type: DINERS_CLUB,
                                    prefixPattern: /^(3|3[0689]|30[0-5])$/,
                                    exactPattern: /^3(0[0-5]|[689])\d*$/,
                                    gaps: [4, 10],
                                    lengths: [14],
                                    code: {
                                        name: CVV,
                                        size: 3
                                    }
                                };

                                types[DISCOVER] = {
                                    niceType: 'Discover',
                                    type: DISCOVER,
                                    prefixPattern: /^(6|60|601|6011|65|64|64[4-9])$/,
                                    exactPattern: /^(6011|65|64[4-9])\d*$/,
                                    gaps: [4, 8, 12],
                                    lengths: [16, 19],
                                    code: {
                                        name: CID,
                                        size: 3
                                    }
                                };

                                types[JCB] = {
                                    niceType: 'JCB',
                                    type: JCB,
                                    prefixPattern: /^(2|21|213|2131|1|18|180|1800|3|35)$/,
                                    exactPattern: /^(2131|1800|35)\d*$/,
                                    gaps: [4, 8, 12],
                                    lengths: [16],
                                    code: {
                                        name: CVV,
                                        size: 3
                                    }
                                };

                                types[UNIONPAY] = {
                                    niceType: 'UnionPay',
                                    type: UNIONPAY,
                                    prefixPattern: /^(6|62)$/,
                                    exactPattern: /^62\d*$/,
                                    gaps: [4, 8, 12],
                                    lengths: [16, 17, 18, 19],
                                    code: {
                                        name: CVN,
                                        size: 3
                                    }
                                };

                                types[MAESTRO] = {
                                    niceType: 'Maestro',
                                    type: MAESTRO,
                                    prefixPattern: /^(5|5[06-9]|6\d*)$/,
                                    exactPattern: /^5[06-9]\d*$/,
                                    gaps: [4, 8, 12],
                                    lengths: [12, 13, 14, 15, 16, 17, 18, 19],
                                    code: {
                                        name: CVC,
                                        size: 3
                                    }
                                };

                                function creditCardType(cardNumber) {
                                    var type, value, i;
                                    var prefixResults = [];
                                    var exactResults = [];

                                    if (!(typeof cardNumber === 'string' || cardNumber instanceof String)) {
                                        return [];
                                    }

                                    for (i = 0; i < testOrder.length; i++) {
                                        type = testOrder[i];
                                        value = types[type];

                                        if (cardNumber.length === 0) {
                                            prefixResults.push(clone(value));
                                            continue;
                                        }

                                        if (value.exactPattern.test(cardNumber)) {
                                            exactResults.push(clone(value));
                                        } else if (value.prefixPattern.test(cardNumber)) {
                                            prefixResults.push(clone(value));
                                        }
                                    }

                                    return exactResults.length ? exactResults : prefixResults;
                                }

                                creditCardType.getTypeInfo = function (type) {
                                    return clone(types[type]);
                                };

                                creditCardType.types = {
                                    VISA: VISA,
                                    MASTERCARD: MASTERCARD,
                                    AMERICAN_EXPRESS: AMERICAN_EXPRESS,
                                    DINERS_CLUB: DINERS_CLUB,
                                    DISCOVER: DISCOVER,
                                    JCB: JCB,
                                    UNIONPAY: UNIONPAY,
                                    MAESTRO: MAESTRO
                                };

                                module.exports = creditCardType;


                                /***/ }
                            /******/]);
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>




</body>
</html>


