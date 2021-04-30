<template>
    <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
</template>

<script>
    import ApexCharts from '../apexcharts/apexcharts.min'
    import chartdata from '../chart'
    export default {
        name: "ChartView",
        data(){
            return{
                chartdata:chartdata
            }
        },
        mounted() {
                new ApexCharts(document.querySelector("#apexChart1"),this.chartdata).render();
        }

    }
</script>

<style scoped>

</style>