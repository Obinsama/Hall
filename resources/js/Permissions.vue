<template>
    
</template>

<script>
    export default {
        methods: {
            $can(permissionName) {
                return Permissions.indexOf(permissionName) !== -1;
            },
        },
    };
</script>

<style scoped>

</style>