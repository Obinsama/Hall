<template>
    <nav class="settings-sidebar">
        <div class="sidebar-body">
            <a href="#" class="settings-sidebar-toggler">
                <i data-feather="settings"></i>
            </a>
            <h6 class="text-muted">Sidebar:</h6>
            <div class="form-group border-bottom">
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
                        Light
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
                        Dark
                    </label>
                </div>
            </div>
            <div class="theme-wrapper">
                <h6 class="text-muted mb-2">Light Version:</h6>
                <a class="theme-item active" href="index.html">
                    <img src="assets/images/screenshots/light.jpg" alt="light version">
                </a>
                <h6 class="text-muted mb-2">Dark Version:</h6>
                <a class="theme-item" href="https://www.nobleui.com/laravel/template/dark">
                    <img src="assets/images/screenshots/dark.jpg" alt="light version">
                </a>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "NavBarFloat"
    }
</script>

<style scoped>

</style>