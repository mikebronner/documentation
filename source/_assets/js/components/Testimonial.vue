<script>
    export default {
        data: function () {
            return {
                currentTestimonialIndex: 0,
                name: "",
                company: "",
                photo: "",
                text: "",
                transitionClass: "",
            };
        },

        mounted: function () {
            let max = window.testimonials.length;
            this.currentTestimonialIndex = Math.floor(Math.random() * max);
            this.name = window.testimonials[this.currentTestimonialIndex].name;
            this.company = window.testimonials[this.currentTestimonialIndex].company;
            this.photo = window.testimonials[this.currentTestimonialIndex].photo;
            this.text = window.testimonials[this.currentTestimonialIndex].text;
        },

        computed: {
            currentTestimonial: function () {
                return window.testimonials[this.currentTestimonialIndex];
            },
        },

        methods: {
            nextTestimonial: function () {
                let nextIndex = this.currentTestimonialIndex + 1;

                if (nextIndex > window.testimonials.length - 1) {
                    nextIndex = 0;
                }

                this.transition(nextIndex, "left");
            },

            previousTestimonial: function () {
                let previousIndex = this.currentTestimonialIndex - 1;

                if (previousIndex < 0) {
                    previousIndex = window.testimonials.length - 1;
                }

                this.transition(previousIndex, "right");
            },

            transition: function (newIndex, direction) {
                let fadeOut = "fadeOutLeft";
                let fadeIn = "fadeInRight";

                if (direction == "right") {
                    fadeOut = "fadeOutRight";
                    fadeIn = "fadeInLeft";
                }

                this.transitionClass = "animated " + fadeOut
                setTimeout(() => {
                    this.currentTestimonialIndex = newIndex;
                    this.transitionClass = "animated " + fadeIn;
                }, 1000);
            },
        },
    };
</script>

<template>
    <div
        class="relative mt-6 slide-in-right"
    >
            <div
                class="absolute w-full"
                style="top: 50px;"
            >
                <div
                    :class="transitionClass"
                    class="cursor-pointer mx-auto max-w-3xl flex justify-between bg-white shadow-lg rounded-lg h-16 items-center"
                >
                    <span
                        @click="previousTestimonial"
                        class="flex items-center h-full"
                    >
                        <svg
                            aria-hidden="true"
                            focusable="false"
                            class="cursor-pointer icon fill-current text-mono-700 m-2"
                            role="img"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <path d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zm27.5-379.5l-123 123c-4.7 4.7-4.7 12.3 0 17l123 123c7.6 7.6 20.5 2.2 20.5-8.5V133c0-10.7-12.9-16.1-20.5-8.5z"></path>
                        </svg>
                    </span>
                    <span
                        @click="nextTestimonial"
                        class="flex items-center h-full"
                    >
                        <svg
                            aria-hidden="true"
                            focusable="false"
                            class="icon fill-current text-mono-700 m-2"
                            role="img"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-27.5 379.5l123-123c4.7-4.7 4.7-12.3 0-17l-123-123c-7.6-7.6-20.5-2.2-20.5 8.5v246c0 10.7 12.9 16.1 20.5 8.5z"></path>
                        </svg>
                    </span>
                </div>
            </div>
        <div
            class="pointer-events-none relative mx-auto w-full max-w-3xl px-8"
        >
            <blockquote
                :class="transitionClass"
                class="pointer-events-auto relative not-italic relative border-none text-orange-900 bg-orange-100 pb-2 px-8 pt-12 m-0 shadow-lg rounded-lg"
            >
                <img
                    :src="currentTestimonial.photo"
                    class="absolute px-auto rounded-full border-8 border-orange-100 w-24 h-24"
                    style="top: -48px; left: 50%; margin-left: -48px;"
                >
                <cite
                    class="text-center block mb-6 text-sm"
                >
                    {{ currentTestimonial.name }}
                    <br>
                    {{ currentTestimonial.company }}
                </cite>
                <span v-html="currentTestimonial.text"></span>
            </blockquote>
        </div>
    </div>
</template>
