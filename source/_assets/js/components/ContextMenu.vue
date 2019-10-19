<script>
    export default {
        props: {
            headings: Array,
        },
    };
</script>

<template>
    <div class="flex-1 hidden lg:flex">
        <nav role="aside" class="flex flex-col" v-if="headings.length">
            <h4 class="mb-2 mt-6 text-sm uppercase font-bold tracking-wide">On this page</h4>

            <a v-for="heading in headings"
                class="block mb-1 text-blue-800 hover:text-purple text-sm font-normal leading-normal"
                :class="{'ml-0': heading.tagName == 'H2', 'ml-6': heading.tagName == 'H3'}"
                :href="'#' + heading.id"
                :key="heading.id"
            >{{ heading.textContent }}</a>
        </nav>
    </div>
</template>
