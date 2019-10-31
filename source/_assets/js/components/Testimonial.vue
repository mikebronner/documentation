<script>
    export default {
        data: function () {
            return {
                name: "",
                company: "",
                photo: "",
                text: "",
            };
        },

        mounted: function () {
            console.log(window.testimonials);
            let max = window.testimonials.length;
            let chosen = Math.floor(Math.random() * max);

            this.name = window.testimonials[chosen].name;
            this.company = window.testimonials[chosen].company;
            this.photo = window.testimonials[chosen].photo;
            this.text = window.testimonials[chosen].text;
        },
    };
</script>

<template>
    <div
        class="-mx-3 mt-6"
    >
        <div
            class="mx-auto w-full max-w-xl"
        >
            <blockquote
                class="relative not-italic mx-3 relative border-none text-orange-900 pb-2 px-8 pt-12 m-0 bg-orange-100 shadow-lg rounded-lg"
            >
                <img
                    :src="photo"
                    class="absolute px-auto rounded-full border-8 border-orange-100 w-24 h-24"
                    style="top: -48px; left: 50%; margin-left: -48px;"
                >
                <cite
                    class="text-center block mb-6 text-sm"
                >
                    {{ name }}
                    <br>
                    {{ company }}
                </cite>
                <span v-html="text"></span>
            </blockquote>
        </div>
    </div>
</template>
