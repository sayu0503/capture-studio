"use strict";

gsap.fromTo(
    '.blog-card',
    {
    opacity: 0,
    x: 30,
    y:30,
    }
    ,
    {
    opacity: 1,
    x: 0,
    y: 0,
    stagger: 0.1,
    scrollTrigger:{
        trigger: '.blog-card',
        start:'center bottom',
    },
    }
);

gsap.fromTo(
    '.voice-card',
    {
    opacity: 0,
    x: 30,
    y:30,
    }
    ,
    {
    opacity: 1,
    x: 0,
    y: 0,
    stagger: 0.1,
    scrollTrigger:{
        trigger: '.voice-card',
        start:'center bottom',
    },
    }
);

