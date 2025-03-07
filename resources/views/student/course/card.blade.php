<div class="container">
    <div class="row mt-5">

        <div class="preview-card">
            <div class="preview-card__wrp">
                <div class="preview-card__item">
                    <div class="preview-card__img">
                        <img src="https://scontent.fhan20-1.fna.fbcdn.net/v/t39.30808-6/308060930_157663196902672_6686005723424790943_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=Nz5J-sbi8wAQ7kNvgFnypA8&_nc_oc=AdjaLmtzBWe0BpEfDBaaADhkR1iXscgcwJGUE-1G3vphZPKu2iNlkpzYLVwSwVt-n5w&_nc_zt=23&_nc_ht=scontent.fhan20-1.fna&_nc_gid=Aocl6GWe-8c6-H24kyCjDNn&oh=00_AYDbMxWAeyzStxHSi_QBW3UYpPRtDaX5E4yqCchADM6_ug&oe=678C62F2"
                            alt="">
                    </div>
                    <div class="preview-card__content">
                        <span class="preview-card__code">ID: {{$course->id}}</span>
                        <div class="preview-card__title">{{$course->name}}</div>
                        <div class="preview-card__text">{{$course->intro}}</div>
                        <a href="{{url('/student/courses', $course->id)}}" class="preview-card__button">See report
                            card</a>
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>


<style>
    @import url("https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700,800");

    * {
        box-sizing: border-box;
    }

    body {
        background-color: #fff;
        min-height: 100vh;
        font-family: "Fira Sans", sans-serif;
    }

    .preview-card {
        position: relative;
        margin: 15px;
        background: #fff;
        box-shadow: 0px 3px 10px rgba(34, 35, 58, 0.2);
        padding: 30px 25px 30px;
        border-radius: 25px;
        transition: all 0.3s;
    }

    @media screen and (max-width: 992px) {
        .preview-card {
            height: auto;
        }
    }

    @media screen and (max-width: 768px) {
        .preview-card {
            min-height: 500px;
            height: auto;
            margin: 120px auto;
        }
    }

    @media screen and (max-height: 500px) and (min-width: 992px) {
        .preview-card {
            height: auto;
        }
    }

    .preview-card__item {
        display: flex;
        align-items: center;
    }

    @media screen and (max-width: 768px) {
        .preview-card__item {
            flex-direction: column;
        }
    }

    .preview-card__item.swiper-slide-active .blog-slider__img img {
        opacity: 1;
        transition-delay: 0.3s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>* {
        opacity: 1;
        transform: none;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(1) {
        transition-delay: 0.3s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(2) {
        transition-delay: 0.4s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(3) {
        transition-delay: 0.5s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(4) {
        transition-delay: 0.6s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(5) {
        transition-delay: 0.7s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(6) {
        transition-delay: 0.8s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(7) {
        transition-delay: 0.9s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(8) {
        transition-delay: 1s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(9) {
        transition-delay: 1.1s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(10) {
        transition-delay: 1.2s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(11) {
        transition-delay: 1.3s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(12) {
        transition-delay: 1.4s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(13) {
        transition-delay: 1.5s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(14) {
        transition-delay: 1.6s;
    }

    .preview-card__item.swiper-slide-active .blog-slider__content>*:nth-child(15) {
        transition-delay: 1.7s;
    }

    .preview-card__img {
        width: 300px;
        flex-shrink: 0;
        height: 300px;
        background-image: linear-gradient(147deg, #000 0%, #000 74%);
        box-shadow: 0px 3px 10px 1px rgba(252, 56, 56, 0.2);
        border-radius: 20px;
        transform: translateX(-80px);
        overflow: hidden;
    }

    .preview-card__img:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(147deg, #000 0%, #000 74%);
        border-radius: 20px;
        opacity: 0.4;
    }

    .preview-card__img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        opacity: 1;
        border-radius: 20px;
        transition: all 0.3s;
    }

    @media screen and (max-width: 768px) {
        .preview-card__img {
            transform: translateY(-50%);
            width: 90%;
        }
    }

    @media screen and (max-width: 576px) {
        .preview-card__img {
            width: 95%;
        }
    }

    @media screen and (max-height: 500px) and (min-width: 992px) {
        .preview-card__img {
            height: 270px;
        }
    }

    .preview-card__content {
        padding-right: 25px;
    }

    @media screen and (max-width: 768px) {
        .preview-card__content {
            margin-top: -80px;
            text-align: center;
            padding: 0 30px;
        }
    }

    @media screen and (max-width: 576px) {
        .preview-card__content {
            padding: 0;
        }
    }

    .preview-card__content>* {
        transform: translateY(25px);
        transition: all 0.4s;
    }

    .preview-card__code {
        color: #7b7992;
        margin-bottom: 15px;
        display: block;
        font-weight: 500;
    }

    .preview-card__title {
        font-size: 24px;
        font-weight: 700;
        color: #0d0925;
        margin-bottom: 20px;
    }

    .preview-card__text {
        color: #4e4a67;
        margin-bottom: 30px;
        line-height: 1.5em;
    }

    .preview-card__button {
        display: inline-flex;
        background-image: linear-gradient(147deg, #000 0%, #000 74%);
        padding: 15px 35px;
        margin-bottom: 30px;
        border-radius: 50px;
        color: #fff;
        box-shadow: 0px 3px 10px rgba(252, 56, 56, 0.4);
        text-decoration: none;
        font-weight: 500;
        justify-content: center;
        text-align: center;
        letter-spacing: 1px;
    }

    .preview-card__button:hover {
        color: #989898;
        text-decoration: none;
    }
</style>