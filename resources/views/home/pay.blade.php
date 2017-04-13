@extends('layouts.master')
@section('title')
    在线支付平台
@endsection
@section('style')
    <style type="text/css">
        body {
            margin-top: 50px;
            /*font-family: "宋体" ;*/
            color: #797BED;;
            background: #2A2B30;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* product grid */
        .grid {
            margin: 0 auto;
            padding: 4em 1em;
            max-width: 1200px;
            text-align: center;
            overflow: hidden;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* product */
        .product {
            position: relative;
            display: inline-block;
            vertical-align: top;
            max-width: 250px;
            margin: 0 1em 2.5em;
            padding: 1.5em 1.5em 2em;
            background: #24252A;
            border-radius: 5px;
            border: 3px solid #24252A;
        }

        /* product info */
        .product__info > span {
            display: block;
            padding: 1em 0;
        }

        .product__image {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
        }

        .product:hover .product__image {
            -webkit-animation: swing 0.6s forwards;
            animation: swing 0.6s forwards;
        }

        @-webkit-keyframes swing {
            25% {
                -webkit-transform: rotate3d(0, 0, 1, 6deg);
                transform: rotate3d(0, 0, 1, 6deg);
            }

            50% {
                -webkit-transform: rotate3d(0, 0, 1, -4deg);
                transform: rotate3d(0, 0, 1, -4deg);
            }

            75% {
                -webkit-transform: rotate3d(0, 0, 1, 2deg);
                transform: rotate3d(0, 0, 1, 2deg);
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg);
            }
        }

        @keyframes swing {
            25% {
                -webkit-transform: rotate3d(0, 0, 1, 6deg);
                transform: rotate3d(0, 0, 1, 6deg);
            }

            50% {
                -webkit-transform: rotate3d(0, 0, 1, -4deg);
                transform: rotate3d(0, 0, 1, -4deg);
            }

            75% {
                -webkit-transform: rotate3d(0, 0, 1, 2deg);
                transform: rotate3d(0, 0, 1, 2deg);
            }

            100% {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg);
            }
        }

        .product__title {
            font-size: 150%;
            margin: 1em 0 0;
            min-height: 3em;

        }

        .product__price {
            font-weight: bold;
            color: #797BED;
        }

        .action {
            display: inline-block;
            font-size: 1em;
            white-space: nowrap;
            padding: 0.85em 1.25em;
            cursor: pointer;
            border: none;
            background: transparent;
            text-align: center;
            margin-top: 0.8em;
        }

        .action:focus {
            outline: none;
        }

        .action--button {
            background: #2C2D34;
            color: #fff;
            border-radius: 2px;
            -webkit-transition: background 0.2s;
            transition: background 0.2s;
        }

        .action--button:hover {
            background: #5C5EDC;
        }

        .action__text {
            font-family: 'Raleway', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-weight: bold;
            letter-spacing: 1px;
            font-size: .813em;
            vertical-align: middle;
            display: inline-block;
        }

        .action--button i + span {
            margin-left: 1em;
        }
    </style>
@endsection

@section('content')
    <div class="view">
        <!-- Product grid -->
        <section class="grid">
            <!-- Products -->
            <div class="product">
                <div class="product__info">
                    <img class="product__image" src="{{asset('vendor/common/img/1.png')}}" alt="Product 1"/>
                    <h2 class="product__title">没钱先支付一个月</h2>
                    <span class="product__price highlight">￥30.00</span>
                    <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span
                                class="action__text">支付宝支付</span></button>
                    <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span
                                class="action__text">微&nbsp;信&nbsp;支&nbsp;付</span></button>
                </div>
            </div>
            <div class="product">
                <div class="product__info">
                    <img class="product__image" src="{{asset('vendor/common/img/4.png')}}" alt="Product 2"/>
                    <h2 class="product__title">三个月支付有优惠</h2>
                    <span class="product__price highlight">￥80.00</span>
                    <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span
                                class="action__text">支付宝支付</span></button>
                    <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span
                                class="action__text">微&nbsp;信&nbsp;支&nbsp;付</span></button>
                </div>
            </div>


            <div class="product">
                <div class="product__info">
                    <img class="product__image" src="{{asset('vendor/common/img/9.png')}}" alt="Product 3"/>
                    <h2 class="product__title">六个月支付更优惠</h2>
                    <span class="product__price highlight">￥150.00</span>
                    <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span
                                class="action__text">支付宝支付</span></button>
                    <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span
                                class="action__text">微&nbsp;信&nbsp;支&nbsp;付</span></button>
                </div>

            </div>
            <div class="product">
                <div class="product__info">
                    <img class="product__image" src="{{asset('vendor/common/img/6.png')}}" alt="Product 4"/>
                    <h2 class="product__title">有钱任性来一年的</h2>
                    <span class="product__price highlight">￥260.00</span>
                    <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span
                                class="action__text">支付宝支付</span></button>
                    <button class="action action--button action--buy"><i class="fa fa-shopping-cart"></i><span
                                class="action__text">微&nbsp;信&nbsp;支&nbsp;付</span></button>
                </div>

            </div>


    </div>
    </section>
    </div>
@endsection


@section('script')
    <script type="text/javascript">

        $(document).ready(function () {
            $('.product').mouseenter(function () {
                $(this).css("border", "3px solid #5C5EDC");
            });
            $('.product').mouseleave(function () {
                $(this).css("border", "3px solid #24252A");
            });

        });
    </script>

@endsection 