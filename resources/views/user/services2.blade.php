@extends('user.layout.app')

@section('title', 'Home Page')

@push('style')
    <style>
        .card-container {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 25px;
            max-width: 900px;
            margin: 40px auto;
        }

        .flip-card {
            width: 100%;
            height: 300px;
            perspective: 1000px;
        }

        .flip-inner {
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease;
            transform-style: preserve-3d;
            position: relative;
        }

        /* Hover এ Y-axis flip */
        .flip-card:hover .flip-inner {
                transform: rotateY(180deg);
            } 

        /* Front & Back Common */
        .flip-front,
        .flip-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            /* border-radius: 12px; */
            overflow: hidden;
        }

        /* Front */
        .flip-front img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Back */
        .flip-back {
            background: #212832;
            color: #fff;
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            text-align: center;
        }

        .btn-learn {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 17px;
            color: #f0f016;
            transition: 0.5s;
        }

        .icon_left {
            padding-right: 15px;
            transition: 0.5s;
        }

        .btn-learn:hover .icon_left {
            padding-right: 5px;
        }

        .btn-learn:hover {
            color: #fff;
        }

        .card_h3 {
            font-weight: 900;
            text-align: center;
            -webkit-text-stroke: 2px #e11318;
            -webkit-text-fill-color: #fff;
            color: #fff;
            font-size: 35px;
        }
        .text-underline{
            text-decoration: underline;
            text-decoration-thickness: 3px;
            text-decoration-color: #e11318;
           text-underline-offset: 10px
        }
        .mt-80{
            margin-top: 80px;
        }
    </style>
@endpush

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-12  mt-80">
                <h1 class="text-blod text-center">Hotel & Restaurants </h1>
            </div>
        </div>
        
    </div>




@endsection

@push('script')
    <script>

    </script>
@endpush