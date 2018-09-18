<template>
    <li class="list-reset mb-2 text-sm">
        <a :href="item.root" class="text-blue-darker"
            :class="{ 'text-purple font-medium': isActive(item.root) }">
            <slot></slot>
        </a>

        <ul v-if="item.children" class="list-reset my-2 ext-sm">
            <li :key="key" v-for="(child, key) in item.children" class="mb-2 ml-4">
                <a :href="child.root" class="text-blue-darker"
                :class="{ 'text-purple font-medium': isActive(child.root) }">
                    {{ key }}
                </a>
            </li>
        </ul>
    </li>
</template>

<script>
export default {
    props: {
        item: {
            type: Object,
            required: true,
        },
    },

    methods: {
        isActive(url) {
            return document.URL.endsWith(url);
        }
    },
}
</script>

