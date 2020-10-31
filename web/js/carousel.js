//carousel for expert team

$('.expertContent').slick({
    slidesToShow: 4,
    slidesToScroll:1,
    autoplaySpedd:2000,
    autoplay:true,
    nextArrow:$(".next"),
    prevArrow:$(".prev"),

    responsive: [
    {
    breakpoint: 1024,
    settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
        infinite: true,
    }
    },
    {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    },
    {
        breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
                
});


//carousel for expert team

$('.testimonialcarousel').slick({
    slidesToShow: 3,
    slidesToScroll:1,
    autoplaySpedd:2000,
    autoplay:true,
    nextArrow:$(".nextTesti"),
    prevArrow:$(".prevTexti"),

    responsive: [
    {
    breakpoint: 1024,
    settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
        infinite: true,
    }
    },
    {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    },
    {
        breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
                
});

$('.partenersIconBlock').slick({
    slidesToShow: 3,
    slidesToScroll:1,
    autoplaySpedd:2000,
    autoplay:true,
    nextArrow:$(".nC"),
    prevArrow:$(".pC"),

    responsive: [
    {
    breakpoint: 1024,
    settings: {
        slidesToShow: 2,
        slidesToScroll: 3,
        infinite: true,
    }
    },
    {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    },
    {
        breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
                
});