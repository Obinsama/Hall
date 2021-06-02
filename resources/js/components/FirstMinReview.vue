<template>
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">Ventes</h6>
                    <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 col-md-2 col-xl-2">
                        <h3 class="mb-2">3,897</h3>
                        <div class="d-flex align-items-baseline">
                            <p class="text-success">
                                <span>+3.3%</span>
                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                            </p>
                        </div>
                    </div>
                    <div class="col-10 col-md-10 col-xl-10">
                      <chart-view></chart-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FirstMinReview"
    }
</script>

<style scoped>

</style>