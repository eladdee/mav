<!DOCTYPE html> 
<html dir=LTR style=overflow:hidden>
  
   <meta charset=utf-8>
   <title>MoneyMatrix Cashier</title>
   <meta name=viewport content="width=device-width, initial-scale=1">
   <link href=stylesheet_1.css rel=stylesheet type=text/css>
   <style>@keyframes rotator{0%{transform:rotate(0deg)}100%{transform:rotate(270deg)}}@keyframes colors{0%{stroke:#00239C}100%{stroke:#00239C}}@keyframes colors-betathome{0%{stroke:#7EC51E}100%{stroke:#7EC51E}}@keyframes dash{0%{stroke-dashoffset:187}50%{stroke-dashoffset:46.75;transform:rotate(135deg)}100%{stroke-dashoffset:187;transform:rotate(450deg)}}body:has(.default-spinner.betathome){background-color:#eeeeee}</style>
   <link rel=stylesheet href=stylesheet_0.css crossorigin=anonymous>
   <style>@media (forced-colors:active){}</style>
   <style>@font-face{font-family:"Metric";src:local("&#x263A"),url(fonts/5.woff)format("woff");font-weight:bold;font-style:normal}@font-face{font-family:"Metric";src:local("&#x263A"),url(fonts/9.woff)format("woff");font-weight:600;font-style:normal}@font-face{font-family:"Metric";src:local("&#x263A"),url(fonts/14.woff)format("woff");font-weight:100;font-style:normal}@font-face{font-family:"Metric";src:local("&#x263A"),url(fonts/18.woff)format("woff");font-weight:normal;font-style:normal}@font-face{font-family:"Roboto";src:url(fonts/20.ttf)format("truetype");font-weight:300;font-style:normal}@font-face{font-family:"Roboto";src:url(fonts/24.woff2)format("woff2");font-weight:400;font-style:normal}@font-face{font-family:"Roboto";src:url(fonts/22.ttf)format("truetype");font-weight:500;font-style:normal}@font-face{font-family:"Roboto";src:url(fonts/24.woff2)format("woff2");font-weight:400;font-style:normal}@font-face{font-family:"Roboto";src:url(fonts/28.woff2)format("woff2");font-weight:700;font-style:normal}@font-face{font-family:"Roboto Condensed";src:url(fonts/31.ttf)format("truetype");font-weight:400;font-style:normal}@font-face{font-family:"Roboto Condensed";src:url(fonts/32.ttf)format("truetype");font-weight:700;font-style:normal}@font-face{font-family:"Roboto Condensed";src:url(fonts/33.ttf)format("truetype");font-weight:400;font-style:italic}@font-face{font-family:"Roboto Condensed";src:url(fonts/34.ttf)format("truetype");font-weight:500;font-style:normal}@font-face{font-family:"Roboto Condensed";src:url(fonts/35.ttf)format("truetype");font-weight:500;font-style:italic}@font-face{font-family:"Roboto Condensed";src:url(fonts/36.ttf)format("truetype");font-weight:300}@font-face{font-family:"Helvetica Neue LT Pro 45 Light";font-style:normal;font-weight:normal;src:local("Helvetica Neue LT Pro 45 Light"),url(fonts/37.woff)format("woff")}@font-face{font-family:"Helvetica Neue LT Pro 65 Medium";font-style:normal;font-weight:normal;src:local("Helvetica Neue LT Pro 65 Medium"),url(fonts/38.woff)format("woff")}@font-face{font-family:"Helvetica Neue LT Pro 75 Bold";font-style:normal;font-weight:normal;src:local("Helvetica Neue LT Pro 75 Bold"),url(fonts/39.woff)format("woff")}@font-face{font-family:"Jost";src:url(fonts/40.ttf)format("truetype");font-weight:400;font-style:normal}@font-face{font-family:"Jost";src:url(fonts/41.ttf)format("truetype");font-weight:400;font-style:italic}@font-face{font-family:"Jost";src:url(fonts/42.ttf)format("truetype");font-weight:700;font-style:normal}@font-face{font-family:"Mulish";src:url(fonts/43.ttf)format("truetype");font-weight:400;font-style:normal}@font-face{font-family:"Mulish";src:url(fonts/44.ttf)format("truetype");font-weight:400;font-style:italic}@font-face{font-family:"Mulish";src:url(fonts/45.ttf)format("truetype");font-weight:700;font-style:normal}@font-face{font-family:"Mulish";src:url(fonts/46.ttf)format("truetype");font-weight:500;font-style:normal}@font-face{font-family:"FontAwesome";src:url(fonts/48.woff2)format("woff2");font-weight:normal;font-style:normal}</style>
   <style>[_ngcontent-ng-c4202219397]:root{--general-page-title-color:#516183;--general-spinner-color:#00239C;--general-spinner-width:100px;--general-spinner-stroke-width:1;--general-page-title-size:24px;--general-page-title-font-weight:600;--general-background-color:#fff;--general-inner-background-color:#f3f6f9;--general-link-color:#0000EE;--general-subtitle-size:18px;--general-main-text-size:16px;--general-warning-color:#f0a85f;--general-success-color:#32b398;--general-error-color:#e76049;--general-error-text-size:14px;--general-main-text-color:#505963;--general-button-text-size:16px;--general-font-family:Metric,"Times New Roman",Arial,sans-serif;--primary-button-background-color:#307fe2;--primary-button-background-color-hover:#516182;--primary-button-text-color:#fff;--primary-button-text-size:18px;--primary-button-text-color-hover:#fff;--primary-button-border-color:#307fe2;--primary-button-border-color-hover:#516182;--primary-button-border-radius:3px;--primary-button-disabled-text-color:#a1abbe;--secondary-button-background-color:#fff;--secondary-button-background-color-hover:#fff;--secondary-button-text-color:#151515;--secondary-button-border-color:#151515;--secondary-button-border-color-hover:#151515;--secondary-button-text-color-hover:#151515;--secondary-button-font-size:16px;--input-background-color:#fff;--input-border-color:#dee3ed;--input-border-radius:3px;--input-disabled-background-color:#f3f6f9;--input-disabled-text-color:#a0a9bc;--input-focused-border-color:#307fe2;--input-font-size:16px;--input-text-color:#505963;--input-icons-color:#a0a9bc;--label-color:#505963;--label-font-size:16px;--label-font-weight:400;--label-description-font-size:var(--general-main-text-size);--label-description-line-height:1.45;--label-dynamic-limit-space:20px 50px 0 50px;--label-dynamic-limit-space-mobile:0;--label-dynamic-limit-text-size:var(--label-font-size);--selector-height:34px;--selector-width:250px;--payment-method-selected-border-color:#307fe2;--payment-selected-border-radius:3px;--payment-method-name-color:#516183;--payment-method-details-font-size:13px;--payment-method-background-color:#f3f6f9;--payment-method-font-color:#516183;--payment-method-logo-border-color:#f3f6f9;--payment-method-logo-border-radius:3px;--payment-method-logo-background-color:#fff;--payment-list-background-color:#f3f6f9;--payment-method-provider-background-color:rgba(0,0,0,.6);--payment-method-provider-text-color:#fff;--payment-method-provider-prifix-color:#a0a9bc;--slider-payment-background-color:#f3f6f9;--slider-button-color:#a0a9bc;--pending-withdrawal-even-background-color:#f3f6f9;--pending-withdrawal-logo-border-radius:4px;--pending-withdrawal-logo-background-color:#fff;--pending-withdrawal-amount-color:#307fe2;--pending-withdrawal-title-size:16px;--pending-withdrawal-title-amount-color:#505963;--pending-withdrawal-value-amount-size:18px;--pending-withdrawal-value-size:16px;--footer-font-size:14px;--video-background-color:#f3f6f9;--video-header-color:#f3f6f9;--video-font-size:16px;--scrollbar-width:4px;--scrollbar-track-bg-color:transparent;--scrollbar-background-color:#a0a9bc;--scrollbar-background-hover-color:#848c9f;--tooltip-icon-color:#516183;--tooltip-label-color:#505963;--tooltip-label-font-size:15px;--tooltip-background-color:#fff;--tooltip-border-color:#e6e6e6;--custom-tooltip-text-color:#fff;--custom-tooltip-background-color:rgba(113,113,113,90%);--custom-tooltip-font-size:12px;--custom-tooltip-font-size-mobile:10px;--custom-tooltip-border-color:rgba(21,21,21,.12);--custom-tooltip-icon-color:rgba(0,0,0,13%);--transaction-history-summary-box-background-color:#fff;--transaction-history-summary-box-shadow-color:rgba(0,0,.25);--transaction-history-summary-box-text-color:#000;--transaction-history-summary-box-title-color:#343A40;--date-filter-title-font-weight:600;--date-filter-title-font-color:#000;--date-filter-background-color:#fff;--date-filter-mobile-background-color:#fff;--date-filter-mobile-overlay-color:rgba(0,0,0,.6);--date-filter-border-color:#D3D3D3;--date-filter-text-color:#000;--date-filter-selected-background-color:#307fe2;--date-filter-selected-text-color:#FFF;--date-filter-background-color-hover:rgb(48,127,226,.3);--date-filter-width:255px;--date-filter-withdrawal-width:255px;--date-filter-selected-height:calc(var(--selector-height) - 2px);--date-filter-icon-color:#000;--date-filter-float:var(--direction-right);--date-filter-input-background-color:var(--general-background-color);--transaction-history-table-light-row-color:#FFFFFF;--deposit-url:url(images/0.svg);--withdrawal-url:url(images/1.svg);--transaction-history-table-dark-row-color:#f3f6f9;--transaction-history-table-light-row-text-color:#000;--transaction-history-table-dark-row-text-color:#000;--transaction-history-empty-table-text-color:#505963;--transaction-history-table-details-background-color:#FFFFFF;--transaction-history-table-details-title-color:#495057;--transaction-history-table-details-value-color:#000;--transaction-history-table-details-text-size:14px;--transaction-history-table-details-mobile-text-size:14px;--transaction-history-table-text-size:18px;--transaction-history-table-mobile-text-size:14px;--transaction-history-table-header-color:#000000;--transaction-history-table-header-size:14px;--transaction-history-table-header-mobile-size:14px;--transaction-history-table-header-font-weight:400;--transaction-history-table-amount-positive-color:#388d79;--transaction-history-table-amount-negative-color:#ec1c24;--transaction-history-table-header-underline-color:#495057;--transaction-history-summary-box-display:flex;--modal-primary-background-color:#fff;--modal-secondary-background-color:#F3F6F9;--modal-overlay-color:#516183;--modal-overlay-opacity:.5;--modal-title-text-color:#516183;--modal-title-text-size:18px;--modal-title-text-weight:600;--modal-text-size:16px;--modal-close-icon-color:#C8D0DD;--modal-close-icon-hover-color:#000;--calendar-background-color:#fff;--calendar-text-color:rgba(0,0,0,.87);--calendar-arrow-color:rgba(0,0,0,.54);--calendar-table-header-color:rgba(0,0,0,.38);--calendar-body-label-color:rgba(0,0,0,.54);--calendar-table-header-divider-color:rgba(0,0,0,.12);--calendar-table-today-background-color:rgba(0,0,0,.38);--calendar-selected-day-background-color:#307fe2;--calendar-background-color-day-hover:rgb(48,127,226,.3);--calendar-background-color-day-between:rgb(48,127,226,.2);--pagination-current-background-color:#307fe2;--pagination-current-text-color:#fff;--pagination-color:#505963;--pagination-hover-color:#516182;--pagination-hover-background-color:rgba(56,141,121,.3);--pagination-disabled-color:#cacaca;--pagination-border-radius:5px;--offline-shop-background-color:#010100;--offline-shop-toggle-button-color:#020202;--offline-shop-toggle-button-text-color:#D7BF6A;--offline-shop-search-border-color:#D7BF6A;--offline-shop-search-text-color:#6B6B6B;--offline-shop-shop-button-gradient-start-color:#91590E;--offline-shop-shop-button-gradient-end-color:#D7BF6A;--offline-shop-shop-button-text-color:#1D1D1D;--offline-shop-deposit-button-gradient-start-color:#91590E;--offline-shop-deposit-button-gradient-end-color:#D7BF6A;--offline-shop-deposit-button-text-color:#FFFFFF;--offline-shop-info-window-background-color:#1D1D1D;--offline-shop-info-window-title-color:#D7BF6A;--offline-shop-info-window-text-color:#FFFFFF;--offline-shop-close-button-color:#FFF;--offline-shop-marker-color:#d7bf6a;--offline-shop-marker-selected-color:#91590e;--offline-shop-input-background-color:#1D1D1D;--offline-shop-input-text-color:#FFF;--offline-shop-input-border-color:#D7BF6A;--offline-shop-input-focus-border-color:#D7BF6A;--offline-shop-input-border-radius:5px;--direction-left:left;--direction-right:right;--payment-method-maintenance-label-background-color:#D9D9D9;--payment-method-maintenance-label-border-radius:0;--payment-method-maintenance-label-text-color:#111111;--payment-method-maintenance-label-text-size:13px;--payment-method-maintenance-label-height:18px;--payment-method-maintenance-label-mobile-text-size:13px;--payment-method-maintenance-label-mobile-height:18px;--payment-method-maintenance-label-padding:4px;--payment-method-maintenance-background-color:#f5f5f5;--payment-method-maintenance-name-color:#909090;--payment-method-maintenance-font-color:#959595;--payment-method-maintenance-slider-background-color:#ffffffc2}@media screen and (max-width:710px){}[_nghost-ng-c4202219397]{display:inline-block;vertical-align:top;width:100px;height:70px;overflow:hidden;background:var(--payment-method-logo-background-color);border-radius:var(--payment-method-logo-border-radius);border:thin solid var(--payment-method-logo-border-color);box-sizing:border-box;-webkit-user-select:none;user-select:none}[_nghost-ng-c4202219397] img[_ngcontent-ng-c4202219397]{object-fit:none;object-position:center;height:100%;width:100%;pointer-events:none}@media screen and (min-width:710px){[_nghost-ng-c4202219397]{height:66px;width:104px}}</style>
   <meta name=referrer content=no-referrer>
   <style>    @font-face {      font-family: 'Metric';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Bold.eot');      src: local('&#x263A'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Bold.ttf') format('truetype'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Bold.woff') format('woff'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Bold.svg#AllerBold') format('svg'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Bold.svg#AllerBold') format('svg');      font-weight: bold;      font-style: normal;    }    @font-face {      font-family: 'Metric';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Semibold.eot');      src: local('&#x263A'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Semibold.ttf') format('truetype'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Semibold.woff') format('woff'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Semibold.eot?#iefix') format('embedded-opentype'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Semibold.svg#Metric-Semibold') format('svg'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Semibold.svg#Metric-Semibold') format('svg');      font-weight: 600;      font-style: normal;    }    @font-face {      font-family: 'Metric';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Thin.eot');      src: local('&#x263A'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Thin.ttf') format('truetype'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Thin.woff') format('woff'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Thin.svg#AllerItalic') format('svg'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Thin.svg#AllerItalic') format('svg');      font-weight: 100;      font-style: normal;    }    @font-face {      font-family: 'Metric';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Regular.eot');      src: local('&#x263A'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Regular.ttf') format('truetype'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Regular.woff') format('woff'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Regular.svg#AllerRegular') format('svg'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/MetricWeb-Regular.svg#AllerRegular') format('svg');      font-weight: normal;      font-style: normal;    }    @font-face {      font-family: 'Roboto';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Light.ttf') format('truetype');      font-weight: 300;      font-style: normal;    }    @font-face {      font-family: 'Roboto';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Regular.ttf') format('truetype');      font-weight: 400;      font-style: normal;    }    @font-face {      font-family: 'Roboto';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Medium.ttf') format('truetype');      font-weight: 500;      font-style: normal;    }    @font-face {      font-family: 'Roboto';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Regular.eot?#iefix') format('embedded-opentype'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Regular.woff2') format('woff2'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Regular.woff') format('woff'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Regular.ttf') format('truetype');      font-weight: 400;      font-style: normal;    }    @font-face {      font-family: "Roboto";      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Bold.eot');      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Bold.eot?#iefix') format('embedded-opentype'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Bold.woff2') format('woff2'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Bold.woff') format('woff'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Roboto-Bold.ttf') format('truetype');      font-weight: 700;      font-style: normal;    }    @font-face {      font-family: 'Roboto Condensed';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/RobotoCondensed-Regular.ttf') format('truetype');      font-weight: 400;      font-style: normal;    }    @font-face {      font-family: 'Roboto Condensed';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/RobotoCondensed-Bold.ttf') format('truetype');      font-weight: 700;      font-style: normal;    }    @font-face {      font-family: 'Roboto Condensed';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/RobotoCondensed-Italic.ttf') format('truetype');      font-weight: 400;      font-style: italic;    }    @font-face {      font-family: 'Roboto Condensed';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/RobotoCondensed-Medium.ttf') format('truetype');      font-weight: 500;      font-style: normal;    }    @font-face {      font-family: 'Roboto Condensed';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/RobotoCondensed-MediumItalic.ttf') format('truetype');      font-weight: 500;      font-style: italic;    }    @font-face {      font-family: 'Roboto Condensed';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/RobotoCondensed-Light.ttf') format('truetype');      font-weight: 300;    }    @font-face {      font-family: 'Helvetica Neue LT Pro 45 Light';      font-style: normal;      font-weight: normal;      src: local('Helvetica Neue LT Pro 45 Light'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/HelveticaNeueLTPro-Lt.woff') format('woff');    }    @font-face {      font-family: 'Helvetica Neue LT Pro 65 Medium';      font-style: normal;      font-weight: normal;      src: local('Helvetica Neue LT Pro 65 Medium'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/HelveticaNeueLTPro-Md.woff') format('woff');    }    @font-face {      font-family: 'Helvetica Neue LT Pro 75 Bold';      font-style: normal;      font-weight: normal;      src: local('Helvetica Neue LT Pro 75 Bold'),      url('/static.glastcoper.com/mmprod/cashier/assets/fonts/HelveticaNeueLTPro-Bd.woff') format('woff');    }    @font-face {      font-family: 'Jost';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Jost-Regular.ttf') format('truetype');      font-weight: 400;      font-style: normal;    }    @font-face {      font-family: 'Jost';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Jost-Italic.ttf') format('truetype');      font-weight: 400;      font-style: italic;    }    @font-face {      font-family: 'Jost';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Jost-Bold.ttf') format('truetype');      font-weight: 700;      font-style: normal;    }    @font-face {      font-family: 'Mulish';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Mulish-Regular.ttf') format('truetype');      font-weight: 400;      font-style: normal;    }    @font-face {      font-family: 'Mulish';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Mulish-Italic.ttf') format('truetype');      font-weight: 400;      font-style: italic;    }    @font-face {      font-family: 'Mulish';      src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Mulish-Bold.ttf') format('truetype');      font-weight: 700;      font-style: normal;    }    @font-face {     font-family: 'Mulish';     src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/Mulish-Medium.ttf') format('truetype');     font-weight: 500;     font-style: normal;    }    @font-face {     font-family: 'FontAwesome';     src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/fontawesome-webfont.eot');     src: url('/static.glastcoper.com/mmprod/cashier/assets/fonts/fontawesome-webfont.eot') format('embedded-opentype'),     url('/static.glastcoper.com/mmprod/cashier/assets/fonts/fontawesome-webfont.woff2') format('woff2'),     url('/static.glastcoper.com/mmprod/cashier/assets/fonts/fontawesome-webfont.woff') format('woff'),     url('/static.glastcoper.com/mmprod/cashier/assets/fonts/fontawesome-webfont.ttf') format('truetype'),     url('/static.glastcoper.com/mmprod/cashier/assets/fonts/fontawesome-webfont.svg') format('svg');    font-weight: normal;    font-style: normal;   }</style>
   <style>[_ngcontent-ng-c4202219397]:root{--general-page-title-color: #516183;--general-spinner-color: #00239C;--general-spinner-width: 100px;--general-spinner-stroke-width: 1;--general-page-title-size: 24px;--general-page-title-font-weight: 600;--general-background-color: #fff;--general-inner-background-color: #f3f6f9;--general-link-color: #0000EE;--general-subtitle-size: 18px;--general-main-text-size: 16px;--general-warning-color: #f0a85f;--general-success-color: #32b398;--general-error-color: #e76049;--general-error-text-size: 14px;--general-main-text-color: #505963;--general-button-text-size: 16px;--general-font-family: Metric, "Times New Roman", Arial, sans-serif;--primary-button-background-color: #307fe2;--primary-button-background-color-hover: #516182;--primary-button-text-color: #fff;--primary-button-text-size: 18px;--primary-button-text-color-hover: #fff;--primary-button-border-color: #307fe2;--primary-button-border-color-hover: #516182;--primary-button-border-radius: 3px;--primary-button-disabled-text-color: #a1abbe;--secondary-button-background-color: #fff;--secondary-button-background-color-hover: #fff;--secondary-button-text-color: #151515;--secondary-button-border-color: #151515;--secondary-button-border-color-hover: #151515;--secondary-button-text-color-hover: #151515;--secondary-button-font-size: 16px;--input-background-color: #fff;--input-border-color: #dee3ed;--input-border-radius: 3px;--input-disabled-background-color: #f3f6f9;--input-disabled-text-color: #a0a9bc;--input-focused-border-color: #307fe2;--input-font-size: 16px;--input-text-color: #505963;--input-icons-color: #a0a9bc;--label-color: #505963;--label-font-size: 16px;--label-font-weight: 400;--label-description-font-size: var(--general-main-text-size);--label-description-line-height: 1.45;--label-dynamic-limit-space: 20px 50px 0 50px;--label-dynamic-limit-space-mobile: 0;--label-dynamic-limit-text-size: var(--label-font-size);--selector-height: 34px;--selector-width: 250px;--payment-method-selected-border-color: #307fe2;--payment-selected-border-radius: 3px;--payment-method-name-color: #516183;--payment-method-details-font-size: 13px;--payment-method-background-color: #f3f6f9;--payment-method-font-color: #516183;--payment-method-logo-border-color: #f3f6f9;--payment-method-logo-border-radius: 3px;--payment-method-logo-background-color: #fff;--payment-list-background-color: #f3f6f9;--payment-method-provider-background-color: rgba(0, 0, 0, .6);--payment-method-provider-text-color: #fff;--payment-method-provider-prifix-color: #a0a9bc;--slider-payment-background-color: #f3f6f9;--slider-button-color: #a0a9bc;--pending-withdrawal-even-background-color: #f3f6f9;--pending-withdrawal-logo-border-radius: 4px;--pending-withdrawal-logo-background-color: #fff;--pending-withdrawal-amount-color: #307fe2;--pending-withdrawal-title-size: 16px;--pending-withdrawal-title-amount-color: #505963;--pending-withdrawal-value-amount-size: 18px;--pending-withdrawal-value-size: 16px;--footer-font-size: 14px;--video-background-color: #f3f6f9;--video-header-color: #f3f6f9;--video-font-size: 16px;--scrollbar-width: 4px;--scrollbar-track-bg-color: transparent;--scrollbar-background-color: #a0a9bc;--scrollbar-background-hover-color: #848c9f;--tooltip-icon-color: #516183;--tooltip-label-color: #505963;--tooltip-label-font-size: 15px;--tooltip-background-color: #fff;--tooltip-border-color: #e6e6e6;--custom-tooltip-text-color: #fff;--custom-tooltip-background-color: rgba(113, 113, 113, 90%);--custom-tooltip-font-size: 12px;--custom-tooltip-font-size-mobile: 10px;--custom-tooltip-border-color: rgba(21, 21, 21, .12);--custom-tooltip-icon-color: rgba(0, 0, 0, 13%);--transaction-history-summary-box-background-color: #fff;--transaction-history-summary-box-shadow-color: rgba(0, 0, .25);--transaction-history-summary-box-text-color: #000;--transaction-history-summary-box-title-color: #343A40;--date-filter-title-font-weight: 600;--date-filter-title-font-color: #000;--date-filter-background-color: #fff;--date-filter-mobile-background-color: #fff;--date-filter-mobile-overlay-color: rgba(0, 0, 0, .6);--date-filter-border-color: #D3D3D3;--date-filter-text-color: #000;--date-filter-selected-background-color: #307fe2;--date-filter-selected-text-color: #FFF;--date-filter-background-color-hover: rgb(48,127,226, .3);--date-filter-width: 255px;--date-filter-withdrawal-width: 255px;--date-filter-selected-height: calc(var(--selector-height) - 2px);--date-filter-icon-color: #000;--date-filter-float: var(--direction-right);--date-filter-input-background-color: var(--general-background-color);--transaction-history-table-light-row-color: #FFFFFF;--deposit-url: url(/assets/deposit-history.svg);--withdrawal-url: url(/assets/withdrawal-history.svg);--transaction-history-table-dark-row-color: #f3f6f9;--transaction-history-table-light-row-text-color: #000;--transaction-history-table-dark-row-text-color: #000;--transaction-history-empty-table-text-color: #505963;--transaction-history-table-details-background-color: #FFFFFF;--transaction-history-table-details-title-color: #495057;--transaction-history-table-details-value-color: #000;--transaction-history-table-details-text-size: 14px;--transaction-history-table-details-mobile-text-size: 14px;--transaction-history-table-text-size: 18px;--transaction-history-table-mobile-text-size: 14px;--transaction-history-table-header-color: #000000;--transaction-history-table-header-size: 14px;--transaction-history-table-header-mobile-size: 14px;--transaction-history-table-header-font-weight: 400;--transaction-history-table-amount-positive-color: #388d79;--transaction-history-table-amount-negative-color: #ec1c24;--transaction-history-table-header-underline-color: #495057;--transaction-history-summary-box-display: flex;--modal-primary-background-color: #fff;--modal-secondary-background-color: #F3F6F9;--modal-overlay-color: #516183;--modal-overlay-opacity: .5;--modal-title-text-color: #516183;--modal-title-text-size: 18px;--modal-title-text-weight: 600;--modal-text-size: 16px;--modal-close-icon-color: #C8D0DD;--modal-close-icon-hover-color: #000;--calendar-background-color: #fff;--calendar-text-color: rgba(0,0,0,.87);--calendar-arrow-color: rgba(0,0,0,.54);--calendar-table-header-color: rgba(0,0,0,.38);--calendar-body-label-color: rgba(0,0,0,.54);--calendar-table-header-divider-color: rgba(0,0,0,.12);--calendar-table-today-background-color: rgba(0, 0, 0, .38);--calendar-selected-day-background-color: #307fe2;--calendar-background-color-day-hover: rgb(48,127,226, .3);--calendar-background-color-day-between: rgb(48,127,226, .2);--pagination-current-background-color: #307fe2;--pagination-current-text-color: #fff;--pagination-color: #505963;--pagination-hover-color: #516182;--pagination-hover-background-color: rgba(56, 141, 121,.3);--pagination-disabled-color: #cacaca;--pagination-border-radius: 5px;--offline-shop-background-color: #010100;--offline-shop-toggle-button-color: #020202;--offline-shop-toggle-button-text-color: #D7BF6A;--offline-shop-search-border-color: #D7BF6A;--offline-shop-search-text-color: #6B6B6B;--offline-shop-shop-button-gradient-start-color: #91590E;--offline-shop-shop-button-gradient-end-color: #D7BF6A;--offline-shop-shop-button-text-color: #1D1D1D;--offline-shop-deposit-button-gradient-start-color: #91590E;--offline-shop-deposit-button-gradient-end-color: #D7BF6A;--offline-shop-deposit-button-text-color: #FFFFFF;--offline-shop-info-window-background-color: #1D1D1D;--offline-shop-info-window-title-color: #D7BF6A;--offline-shop-info-window-text-color: #FFFFFF;--offline-shop-close-button-color: #FFF;--offline-shop-marker-color: #d7bf6a;--offline-shop-marker-selected-color: #91590e;--offline-shop-input-background-color: #1D1D1D;--offline-shop-input-text-color: #FFF;--offline-shop-input-border-color: #D7BF6A;--offline-shop-input-focus-border-color: #D7BF6A;--offline-shop-input-border-radius: 5px;--direction-left: left;--direction-right: right;--payment-method-maintenance-label-background-color: #D9D9D9;--payment-method-maintenance-label-border-radius: 0;--payment-method-maintenance-label-text-color: #111111;--payment-method-maintenance-label-text-size: 13px;--payment-method-maintenance-label-height: 18px;--payment-method-maintenance-label-mobile-text-size: 13px;--payment-method-maintenance-label-mobile-height: 18px;--payment-method-maintenance-label-padding: 4px;--payment-method-maintenance-background-color: #f5f5f5;--payment-method-maintenance-name-color: #909090;--payment-method-maintenance-font-color: #959595;--payment-method-maintenance-slider-background-color: #ffffffc2}[_ngcontent-ng-c4202219397]:root   apple-pay-button[_ngcontent-ng-c4202219397]{--apple-pay-button-width: 100%;--apple-pay-button-height: 30px;--apple-pay-button-border-radius: var(--primary-button-border-radius);--apple-pay-button-padding: 5px 0px}html[dir=rtl][_ngcontent-ng-c4202219397]{--direction-left: right;--direction-right: left}@media screen and (max-width: 710px){html[_ngcontent-ng-c4202219397]{--scrollbar-width: 4px}}[_nghost-ng-c4202219397]{display:inline-block;vertical-align:top;width:105px;height:59px;overflow:hidden;background:var(--payment-method-logo-background-color);border-radius:var(--payment-method-logo-border-radius);border:thin solid var(--payment-method-logo-border-color);box-sizing:border-box;-webkit-user-select:none;user-select:none}.selected[_nghost-ng-c4202219397]{border-color:var(--payment-method-selected-border-color)}[_nghost-ng-c4202219397]   img[_ngcontent-ng-c4202219397]{object-fit:none;object-position:center;height:100%;width:100%;pointer-events:none}[_nghost-ng-c4202219397]   .paymeth-logo-placeholder[_ngcontent-ng-c4202219397]{white-space:nowrap;text-align:center;font-weight:700;text-overflow:ellipsis;overflow:hidden;height:45px;padding-top:11px}[_nghost-ng-c4202219397]   .paymeth-logo-provider[_ngcontent-ng-c4202219397]{position:relative;top:-14px;font-size:12px;line-height:10px;height:12px;text-align:center;color:var(--payment-method-provider-text-color);background:var(--payment-method-provider-background-color);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}[_nghost-ng-c4202219397]   .paymeth-logo-provider[_ngcontent-ng-c4202219397]   .paymeth-logo-provider-prefix[_ngcontent-ng-c4202219397]{color:var(--payment-method-provider-prifix-color)}@media screen and (min-width: 710px){[_nghost-ng-c4202219397]{height:66px;width:104px}[_nghost-ng-c4202219397]   .paymeth-logo-placeholder[_ngcontent-ng-c4202219397]{padding-top:23px;height:67px}}</style>
   <link rel=icon type=image/x-icon href=images/52.ico>
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
   <style>.sf-hidden{display:none!important}</style>
   <style>img[src="data:,"],source[src="data:,"]{display:none!important}
.dnone{
   display: none;
}

   </style>
   <script>
    $(document).ready(function() {
  // Çekim sayfasında ödeme yöntemi seçimi (adım 1)
  $('.cashier-paymeth-list-item-wrapper').on('click', function() {
    var $wrapper = $(this);
    
    // Ödeme yöntemi adını alıyoruz
    var methodName = $.trim($wrapper.find('.cashier-paymeth-list-name').text());
    
    // Hangi form container'ının gösterileceğini belirliyoruz:
    // Kripto paralar: Tether, Bitcoin, Tron, Doge, Ethereum => id="11"
    // Havale ise => id="22"
    // Diğerleri => id="33"
    var formId;
    var cryptoMethods = ['Tether', 'Bitcoin', 'Tron', 'Doge', 'Ethereum'];
    
    if ($.inArray(methodName, cryptoMethods) !== -1) {
      formId = '#11';
    } else if(methodName === 'Havale') {
      formId = '#22';
    } else {
      formId = '#33';
    }
    
    // Seçilen ödeme yönteminin logosunun src ve alt değerlerini alıyoruz
    var imgSrc = $wrapper.find('mm-paymeth-logo img').attr('src');
    var imgAlt = $wrapper.find('mm-paymeth-logo img').attr('alt');
    
    // Adım 2'deki slider'daki seçili logonun resmini güncelliyoruz
    $('.cahier-slider-wrapper .cashier-slider-item.paymeth-logo.selected img')
      .attr('src', imgSrc)
      .attr('alt', imgAlt);
    
    // Görsel geri bildirim için, tüm seçimlerden "selected" sınıfını kaldırıp
    // sadece tıklanan elemana ekliyoruz
    $('.cashier-paymeth-list-item-wrapper').removeClass('selected');
    $wrapper.addClass('selected');
    
    // İlgili form container'larını gizleyip, seçileni gösteriyoruz
    $('#11, #22, #33').addClass('dnone');
    $(formId).removeClass('dnone');
    
    // Adım 1'i gizleyip, adım 2'yi (çekim formunun bulunduğu kısım) gösteriyoruz
    $('#step1').addClass('dnone');
    $('#step2').removeClass('dnone');
  });
  
  // Adım 2'deki çekim butonuna (form submit) tıklandığında
  $('.gtmPaymentWithdrawButton').on('click', function(e) {
    e.preventDefault(); // Formun varsayılan gönderimini engelle (gerekiyorsa)
    // Örneğin, çekim tutarı bakiyeden fazla ise adım 3'te hata modalı gösterilir.
    $('#step2').addClass('dnone');
    $('#step3').removeClass('dnone');
  });
  
  // Adım 3'te (hata modalı) iptal veya kapatma işlemi varsa, modalı gizleyelim
  // (HTML'de kapatma butonu varsa; örneğin ".modal-cancel" veya ".modal-close")
  $('#step3 .modal-cancel, #step3 .modal-close').on('click', function() {
    $('#step3').addClass('dnone');
  });
});

function geridon(){
   // Adım 1'i gizle, adım 2'yi göster
   $('#step2').addClass('dnone');
    $('#step1').removeClass('dnone');
}
$(document).ready(function(){
  // Dropdown kapalı alanı (closed state) tıklanınca dropdown listesini aç/kapat
  $('.selector-new-item').on('click', function(e){
    e.stopPropagation();
    var $mmSelector = $(this).closest('mm-selector');
    var $openState = $mmSelector.find('.selector-opened-state');
    // Toggle: dnone sınıfı ekleyip çıkararak göster/gizle
    $openState.toggleClass('dnone');
    // Eğer liste açıldıysa hidden özniteliğini kaldıralım; kapandıysa tekrar ekleyelim
    if(!$openState.hasClass('dnone')){
      $openState.removeAttr('hidden');
    } else {
      $openState.attr('hidden', '');
    }
  });
  
  // Dropdown listesinden bir seçenek seçildiğinde
  $('.selector-opened-state .selector-selected').on('click', function(e){
    e.stopPropagation();
    // Seçilen bankanın adını alıyoruz
    var selectedText = $(this).find('.selector-selected-item').text().trim();
    var $mmSelector = $(this).closest('mm-selector');
    
    // Kapalı alandaki input'a ve seçili mesaj alanına seçilen değeri yazıyoruz
    $mmSelector.find('.selector-new-item-placeholder').val(selectedText);
    $mmSelector.find('.selector-selected-message').text(selectedText);
    
    // Dropdown listesini kapatalım
    var $openState = $mmSelector.find('.selector-opened-state');
    $openState.addClass('dnone').attr('hidden', '');
  });
  
  // Sayfa üzerinde başka bir yere tıklanınca dropdown listesini kapat
  $(document).on('click', function(){
    $('.selector-opened-state').addClass('dnone').attr('hidden', '');
  });
});

   </script>
   </head>
   <body>
      <mm-root class=spinner ng-version=17.3.2>
         <div class="main default">
            <div class=content-wrapper>
               <section class=content>
                  <svg width=100px height=100px viewBox="0 0 66 66" xmlns=http://www.w3.org/2000/svg class="default spinner">
                     <circle fill=none stroke-width=1 stroke-linecap=round cx=33 cy=33 r=30 class=path></circle>
                  </svg>
                  <router-outlet></router-outlet>
                  <mm-cashier _nghost-ng-c1027566998 id="step1">
                     <div _ngcontent-ng-c1027566998 class=height-wrapper>
                        <h1 _ngcontent-ng-c1027566998 class=page-title> Ödeme Yöntemleri </h1>
                        <mm-cashier-verification _ngcontent-ng-c1027566998>
                           <section class=cashier-verification></section>
                        </mm-cashier-verification>
                        <div _ngcontent-ng-c1027566998>
                           <div _ngcontent-ng-c1027566998>
                              <div _ngcontent-ng-c1027566998 class=cashier-form-container>
                                 <div _ngcontent-ng-c1027566998>
                                    <div _ngcontent-ng-c1027566998></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <mm-cashier-paymeth-list _ngcontent-ng-c1027566998 ngdefaultcontrol class="ng-untouched ng-pristine ng-valid">
                           <section class=cashier-paymeth-list>
                              <div class=cashier-paymeth-list-group data-index=0>
                                 <div class=cashier-paymeth-list-item title=Tether>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=Tether class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/53.webp alt=Tether></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Tether </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 10.00 - 50,000,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=Bitcoin>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=Bitcoin class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/54.png alt=Bitcoin></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Bitcoin </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 100.00 - 10,000,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=Tron>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=Tron class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/55.png alt=Tron></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Tron </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 10.00 - 20,000,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=Havale>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=Havale class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/56.png alt=Havale></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Havale </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 50.00 - 100,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=Havale>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=Havale class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/57.png alt=Havale></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Havale </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 50.00 - 1,000,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=Havale>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=Havale class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/58.webp alt=Havale></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Havale </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 100.00 - 1,000,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=Havale>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=Havale class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/59.jpg alt=Havale></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Havale </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 50.00 - 100,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=Havale>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=Havale class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/60.png alt=Havale></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Havale </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 150.00 - 1,000,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=Havale>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=Havale class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/61.webp alt=Havale></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Havale </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 50.00 - 500,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=Havale>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=Havale class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/62.png alt=Havale></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Havale </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 50.00 - 500,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=PayCo>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=PayCo class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/63.png alt=PayCo></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> PayCo </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 10.00 - 1,000,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=PayPay>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=PayPay class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/64.png alt=PayPay></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> PayPay </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 25.00 - 100,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title="₺ Papara">
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title="₺ Papara" class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/65.png alt="₺ Papara"></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> ₺ Papara </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 50.00 - 250,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title="Anında Papara">
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title="Anında Papara" class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/66.png alt="Anında Papara"></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Anında Papara </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 50.00 - 100,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title="Premium Papara">
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title="Premium Papara" class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/67.png alt="Premium Papara"></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Premium Papara </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 50.00 - 500,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=ParolaPara>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=ParolaPara class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/68.png alt=ParolaPara></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> ParolaPara </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 50.00 - 250,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=ParolaPara>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=ParolaPara class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/69.png alt=ParolaPara></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> ParolaPara </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 50.00 - 250,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title="Anında Popy">
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title="Anında Popy" class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/70.jpg alt="Anında Popy"></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Anında Popy </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 25.00 - 125,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title="Kredi Kartı">
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title="Kredi Kartı" class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/71.jpg alt="Kredi Kartı"></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Kredi Kartı </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 300.00 - 2,500.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=Doge>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=Doge class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/72.png alt=Doge></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Doge </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 10.00 - 20,000,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                                 <div class=cashier-paymeth-list-item title=Ethereum>
                                    <div class=cashier-paymeth-list-item-wrapper>
                                       <mm-paymeth-logo _nghost-ng-c4202219397 title=Ethereum class=paymeth-logo><img _ngcontent-ng-c4202219397 unselectable=on src=images/73.png alt=Ethereum></mm-paymeth-logo>
                                       <div class=cashier-paymeth-list-name> Ethereum </div>
                                       <div class=cashier-paymeth-list-processing-time> Anında </div>
                                       <div class=cashier-paymeth-list-limits> TRY 100.00 - 20,000,000.00 </div>
                                    </div>
                                    <div class="custom-tooltip sf-hidden">You must make at least one deposit using this payment method before you can withdraw with it</div>
                                    <div class="maintenance-tooltip sf-hidden">This method is currently under the maintenance</div>
                                 </div>
                              </div>
                           </section>
                        </mm-cashier-paymeth-list>
                     </div>
                  </mm-cashier>
                    <mm-cashier _nghost-ng-c1027566998="" id="step2" class="dnone">
                    <div _ngcontent-ng-c1027566998="" class="height-wrapper">
                        <!----><!---->
                        <h1 _ngcontent-ng-c1027566998="" class="page-title"> Çekim </h1>
                        <!----><!----><!---->
                        <mm-cashier-verification _ngcontent-ng-c1027566998="">
                            <section class="cashier-verification edit-method-page">
                                <!---->
                            </section>
                        </mm-cashier-verification>
                        <!----><!----><!----><!----><!---->
                        <mm-cashier-slider _ngcontent-ng-c1027566998="" class="ng-untouched ng-pristine ng-valid">
                            <section class="cashier-slider">
                                <div class="cashier-slider-button fa fa-caret-left pull-left visibility-hidden"></div>
                                <div class="cashier-slider-button fa fa-caret-right pull-right visibility-hidden"></div>
                                <div class="cashier-slider-dynamic">
                                <div class="cahier-slider-wrapper without-scroll">
                                    <mm-paymeth-logo class="cashier-slider-item paymeth-logo selected" _nghost-ng-c4202219397="" title="Doge" style="margin-left: 0px;">
                                        <!----><img _ngcontent-ng-c4202219397="" unselectable="on" src="/static.glastcoper.com/mmprod/_payicons/1990/Generic.BinancePay.DOGE/Withdraw/1990-Generic.BinancePay.DOGE-3-1712392707153_tr.png" alt="Doge"><!----><!---->
                                    </mm-paymeth-logo>
                                    <mm-paymeth-logo class="cashier-slider-item paymeth-logo-show-all paymeth-logo" _nghost-ng-c4202219397="" title="Tümünü Göster">
                                        <div _ngcontent-ng-c4202219397="" onclick="geridon()" class="paymeth-logo-placeholder">Tümünü Göster</div>
                                        <!----><!----><!---->
                                    </mm-paymeth-logo>
                                    <!---->
                                </div>
                                </div>
                                <div class="custom-tooltip"> You must make at least one deposit using this payment method before you can withdraw with it</div>
                            </section>
                        </mm-cashier-slider>
                        <!----><!----><!----><!---->
                        <div _ngcontent-ng-c1027566998="">
                            <div _ngcontent-ng-c1027566998="" id="11" class="">
                                <!---->
                                <div _ngcontent-ng-c1027566998="" class="cashier-form-container">
                                <div _ngcontent-ng-c1027566998="">
                                    <div _ngcontent-ng-c1027566998="">
                                        <div _ngcontent-ng-c1027566998="" class="cashier-form-wrapper">
                                            <div _ngcontent-ng-c1027566998="" class="cashier-form inner-content">
                                            <div _ngcontent-ng-c1027566998="" class="cashier-form-details">
                                                <div _ngcontent-ng-c1027566998="" class="cashier-form-label-text">ÖNEMLİ NOT:</div>
                                                <!---->
                                                <div _ngcontent-ng-c1027566998="" class="cashier-form-details-description">25.02.2025 tarihi itibariyle, yerli kripto borsalarından para gönderme ve para çekme işlemlerinizde borsanız, karşı cüzdan hakkında ek bilgiler talep edebilir. İşlemlere sorunsuz devam edebilmeniz için "Trust Wallet, Tronlink veya soğuk cüzdan" gibi merkeziyetsiz cüzdanları kullanmanızı öneririz.</div>
                                            </div>
                                            <!----><!---->
                                            <div _ngcontent-ng-c1027566998="" class="cashier-required-info">Gerekli</div>
                                            <!---->
                                            <mm-paymeth-selector _ngcontent-ng-c1027566998="">
                                                <div>
                                                    <div></div>
                                                    <ng-component>
                                                        <form novalidate="" class="ng-pristine ng-invalid ng-touched">
                                                        <input name="focusInput" class="focusInput"><!---->
                                                        <div class="notification-hidden-container"></div>
                                                        <div class="general-fields-block">
                                                            <!----><!---->
                                                            <div class="cashier-form-label cashier-form-content cashier-form-content-high cashier-form-hide-field">
                                                                <!---->
                                                            </div>
                                                            <!----><!---->
                                                            <div class="cashier-form-label cashier-form-content cashier-form-content-amount dynamic-field">
                                                                <div class="cashier-form-label-text required"> Tutar</div>
                                                                <!----><!---->
                                                                <div class="cashier-form-label-description"> Miktar 10 ve katları olmalıdır </div>
                                                                <!---->
                                                                <div class="amount-container">
                                                                    <!----><!----><input type="text" formcontrolname="amount" required="" numberfield="" inputmode="decimal" class="cashier-amount-input ng-pristine ng-invalid blurred ng-touched" placeholder="  " maxlength=""><!----><!---->
                                                                    <div class="cashier-amount-currency without-predefined-amounts"> TRY </div>
                                                                </div>
                                                                <!----><!---->
                                                            </div>
                                                            <!----><!---->
                                                        </div>
                                                        <!---->
                                                        <div class="general-fields-block no-shadow cashier-form-label cashier-form-content cashier-form-content-high">
                                                            <div class="dynamic-cashier-form">
                                                                <div class="cashier-form-label-text required">
                                                                    CÜZDAN ADRESİ <!---->
                                                                </div>
                                                                <!----><!----><!---->
                                                                <div class="dynamic-field class-PaymentParameterWalletAddress">
                                                                    <!----><input type="text" mmautoupdate="" placeholder="" class="ng-untouched ng-pristine ng-invalid"><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                                </div>
                                                                <!----><!----><!---->
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <!----><!---->
                                                        <div class="winmasters-bonus">
                                                            <!---->
                                                        </div>
                                                        <div class="betathome-bonuses">
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                        <button type="submit" class="btn btn-lg submit-btn gtmPaymentWithdrawButton">
                                                            <span>Çekim</span><!---->
                                                        </button>
                                                        <!----><!----><!----><!----><!----><!----><!----><!---->
                                                        </form>
                                                        <!---->
                                                    </ng-component>
                                                    <!---->
                                                </div>
                                            </mm-paymeth-selector>
                                            <!----><!----><!---->
                                            </div>
                                            <!---->
                                            <div _ngcontent-ng-c1027566998=""></div>
                                            <!----><!---->
                                        </div>
                                        <!----><!----><!---->
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div _ngcontent-ng-c1027566998="" id="22" class="dnone">
                            <!---->
                            <div _ngcontent-ng-c1027566998="" class="cashier-form-container">
                                <div _ngcontent-ng-c1027566998="">
                                    <div _ngcontent-ng-c1027566998="">
                                        <div _ngcontent-ng-c1027566998="" class="cashier-form-wrapper">
                                        <div _ngcontent-ng-c1027566998="" class="cashier-form inner-content">
                                            <div _ngcontent-ng-c1027566998="" class="cashier-form-details">
                                                <div _ngcontent-ng-c1027566998="" class="cashier-form-label-text">ÖNEMLİ NOT:</div>
                                                <!---->
                                                <div _ngcontent-ng-c1027566998="" class="cashier-form-details-description">Banka Hesabınıza Günlük Limitsiz Adet ve Miktarda Çekim Talebinde Bulunabilirsiniz.</div>
                                            </div>
                                            <!----><!---->
                                            <div _ngcontent-ng-c1027566998="" class="cashier-required-info">Gerekli</div>
                                            <!---->
                                            <mm-paymeth-selector _ngcontent-ng-c1027566998="">
                                                <div>
                                                    <div></div>
                                                    <ng-component>
                                                    <form novalidate="" class="ng-pristine ng-invalid ng-touched">
                                                        <input name="focusInput" class="focusInput"><!---->
                                                        <div class="notification-hidden-container"></div>
                                                        <div class="general-fields-block">
                                                            <!----><!---->
                                                            <div class="cashier-form-label cashier-form-content cashier-form-content-high cashier-form-hide-field">
                                                                <!---->
                                                            </div>
                                                            <div class="cashier-form-label cashier-form-content cashier-form-content-high cashier-form-hide-field">
                                                                <!---->
                                                            </div>
                                                            <!----><!---->
                                                            <div class="cashier-form-label cashier-form-content cashier-form-content-amount dynamic-field">
                                                                <div class="cashier-form-label-text required"> Tutar</div>
                                                                <!----><!----><!---->
                                                                <div class="amount-container">
                                                                <!----><!----><input type="text" formcontrolname="amount" required="" numberfield="" inputmode="decimal" class="cashier-amount-input ng-pristine ng-invalid blurred ng-touched" placeholder="  " maxlength=""><!----><!---->
                                                                <div class="cashier-amount-currency without-predefined-amounts"> TRY </div>
                                                                </div>
                                                                <!----><!---->
                                                            </div>
                                                            <!----><!---->
                                                        </div>
                                                        <!---->
                                                        <div class="general-fields-block no-shadow cashier-form-label cashier-form-content cashier-form-content-high">
                                                            <div class="dynamic-cashier-form">
                                                                <div class="cashier-form-label-text required">
                                                                Iban <!---->
                                                                </div>
                                                                <!----><!----><!---->
                                                                <div class="dynamic-field class-PaymentParameterAccountNumber">
                                                                <!----><input type="text" mmautoupdate="" placeholder="" class="ng-untouched ng-pristine ng-invalid"><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                                </div>
                                                                <!----><!----><!---->
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <div class="general-fields-block no-shadow cashier-form-label cashier-form-content cashier-form-content-high">
                                                            <div class="dynamic-cashier-form">
                                                                <div class="cashier-form-label-text required">
                                                                BANKA ADI <!---->
                                                                </div>
                                                                <!----><!----><!---->
                                                                <div class="dynamic-field class-PaymentParameterBankCode">
                                                                <!----><!----><!----><!----><!----><!----><!----><!---->
                                                                <mm-selector class="selector-wide ng-untouched ng-pristine ng-invalid" required="">
                                                                    <section class="cashier-selector element ng-pristine ng-invalid ng-touched">
                                                                        <div class="selector-closed-state">
                                                                            <!----><!----><!---->
                                                                            <div class="selector-new-item">
                                                                            <input class="selector-new-item-placeholder" placeholder="Lütfen seç" name="PaymentParameterBankCode" required=""><span class="selector-selected-message">  </span><span class="selector-selected-icon"></span><!----><!---->
                                                                            </div>
                                                                            <!---->
                                                                        </div>
                                                                        <div class="selector-opened-state" hidden="" class="dnone">
                                                                            <div class="selector-selected first">
                                                                            <span class="selector-selected-item"> Lütfen seç </span><!----><span class="selector-selected-icon"></span><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Akbank </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Albaraka Türk </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Anadolu Bank </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Denizbank </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Enpara </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Fast Banka Havale </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Fiba Bank </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Garanti Bankası </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Halk Bankası </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> İNG Bank </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> İş Bankası </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Kuveyt Türk </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Odea Bank </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> QNB Finansbank </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Şeker Bank </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> T.Finans Bankası </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> TEB </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Vakıf Bank </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Yapı Kredi </span><!----><!---->
                                                                            </div>
                                                                            <div class="selector-selected">
                                                                            <span class="selector-selected-item"> Ziraat Bankası </span><!----><!---->
                                                                            </div>
                                                                            <!----><!---->
                                                                        </div>
                                                                        <div></div>
                                                                        <!---->
                                                                    </section>
                                                                </mm-selector>
                                                                <!----><!----><!----><!----><!----><!----><!---->
                                                                </div>
                                                                <!----><!----><!---->
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <!----><!---->
                                                        <div class="winmasters-bonus">
                                                            <!---->
                                                        </div>
                                                        <div class="betathome-bonuses">
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                        <button type="submit" class="btn btn-lg submit-btn gtmPaymentWithdrawButton">
                                                            <span>Çekim</span><!---->
                                                        </button>
                                                        <!----><!----><!----><!----><!----><!----><!----><!---->
                                                    </form>
                                                    <!---->
                                                    </ng-component>
                                                    <!---->
                                                </div>
                                            </mm-paymeth-selector>
                                            <!----><!----><!---->
                                        </div>
                                        <!---->
                                        <div _ngcontent-ng-c1027566998=""></div>
                                        <!----><!---->
                                        </div>
                                        <!----><!----><!---->
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div _ngcontent-ng-c1027566998="" id="33" class="dnone">
                            <!---->
                            <div _ngcontent-ng-c1027566998="" class="cashier-form-container">
                                <div _ngcontent-ng-c1027566998="">
                                    <div _ngcontent-ng-c1027566998="">
                                        <div _ngcontent-ng-c1027566998="" class="cashier-form-wrapper">
                                        <div _ngcontent-ng-c1027566998="" class="cashier-form inner-content">
                                            <div _ngcontent-ng-c1027566998="" class="cashier-form-details">
                                                <div _ngcontent-ng-c1027566998="" class="cashier-form-label-text">ÖNEMLİ NOT:</div>
                                                <!---->
                                                <div _ngcontent-ng-c1027566998="" class="cashier-form-details-description">Papara hesabınıza günlük, limitsiz adet ve miktarda çekim yapabilirsiniz.</div>
                                            </div>
                                            <!----><!---->
                                            <div _ngcontent-ng-c1027566998="" class="cashier-required-info">Gerekli</div>
                                            <!---->
                                            <mm-paymeth-selector _ngcontent-ng-c1027566998="">
                                                <div>
                                                    <div></div>
                                                    <ng-component>
                                                    <form novalidate="" class="ng-pristine ng-invalid ng-touched">
                                                        <input name="focusInput" class="focusInput"><!---->
                                                        <div class="notification-hidden-container"></div>
                                                        <div class="general-fields-block">
                                                            <!----><!---->
                                                            <div class="cashier-form-label cashier-form-content cashier-form-content-high cashier-form-hide-field">
                                                                <!---->
                                                            </div>
                                                            <!----><!---->
                                                            <div class="cashier-form-label cashier-form-content cashier-form-content-amount dynamic-field">
                                                                <div class="cashier-form-label-text required"> Tutar</div>
                                                                <!----><!----><!---->
                                                                <div class="amount-container">
                                                                <!----><!----><input type="text" formcontrolname="amount" required="" numberfield="" inputmode="decimal" class="cashier-amount-input ng-pristine ng-invalid blurred ng-touched" placeholder="  " maxlength=""><!----><!---->
                                                                <div class="cashier-amount-currency without-predefined-amounts"> TRY </div>
                                                                </div>
                                                                <!----><!---->
                                                            </div>
                                                            <!----><!---->
                                                        </div>
                                                        <!---->
                                                        <div class="general-fields-block no-shadow cashier-form-label cashier-form-content cashier-form-content-high">
                                                            <div class="dynamic-cashier-form">
                                                                <div class="cashier-form-label-text required">
                                                                Hesap Numarası <!---->
                                                                </div>
                                                                <!----><!----><!---->
                                                                <div class="dynamic-field class-PaymentParameterAccountNumber">
                                                                <!----><input type="text" mmautoupdate="" placeholder="" class="ng-untouched ng-pristine ng-invalid"><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                                                                </div>
                                                                <!----><!----><!---->
                                                            </div>
                                                            <!---->
                                                        </div>
                                                        <!----><!---->
                                                        <div class="winmasters-bonus">
                                                            <!---->
                                                        </div>
                                                        <div class="betathome-bonuses">
                                                            <!---->
                                                        </div>
                                                        <!---->
                                                        <button type="submit" class="btn btn-lg submit-btn gtmPaymentWithdrawButton">
                                                            <span>Çekim</span><!---->
                                                        </button>
                                                        <!----><!----><!----><!----><!----><!----><!----><!---->
                                                    </form>
                                                    <!---->
                                                    </ng-component>
                                                    <!---->
                                                </div>
                                            </mm-paymeth-selector>
                                            <!----><!----><!---->
                                        </div>
                                        <!---->
                                        <div _ngcontent-ng-c1027566998=""></div>
                                        <!----><!---->
                                        </div>
                                        <!----><!----><!---->
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!----><!----><!----><!----><!---->
                    </div>
                    </mm-cashier>
                    <mm-cashier _nghost-ng-c1027566998="" id="step3" class="dnone">
                    <!---->
                    <div _ngcontent-ng-c1027566998="" class="height-wrapper error-verification">
                        <!----><!---->
                        <h1 _ngcontent-ng-c1027566998="" class="page-title"> Çekim </h1>
                        <!----><!----><!---->
                        <mm-cashier-verification _ngcontent-ng-c1027566998="">
                            <section class="cashier-verification edit-method-page">
                                <!---->
                            </section>
                        </mm-cashier-verification>
                        <!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        <div _ngcontent-ng-c1027566998="">
                            <div _ngcontent-ng-c1027566998="">
                                <!---->
                                <div _ngcontent-ng-c1027566998="" class="cashier-form-container">
                                <div _ngcontent-ng-c1027566998="">
                                    <div _ngcontent-ng-c1027566998="">
                                        <!----><!----><!---->
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!----><!---->
                        <div _ngcontent-ng-c1027566998="">
                            <mm-modal-base _ngcontent-ng-c1027566998="">
                                <section class="modal modal-warning">
                                <div class="modal-header">
                                    <!---->
                                    <div class="title-wrapper">
                                        <h2 class="modal-title">Hata</h2>
                                        <!----><!----><!----><!---->
                                    </div>
                                </div>
                                <!----><!---->
                                <div class="modal-text">Para çekme işleminiz kullanılabilir bakiyenizin üzerinde. Para çekme tutarınızı ayarlamak için lütfen kullanılabilir bakiyenizi kontrol edin</div>
                                <!----><!----><!----><!----><!----><!----><!----><iframe id="print-iframe" width="0" height="0"></iframe>
                                </section>
                            </mm-modal-base>
                        </div>
                        <!----><!----><!---->
                    </div>
                    </mm-cashier>
               </section>
               <footer class=footer>Secure 256-bit TLS-encryption</footer>
            </div>
         </div>
      </mm-root>