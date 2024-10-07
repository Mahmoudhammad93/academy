<template>
    <div class="edit">
        <div class="col-md-12 grid-margin stretch-card mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <form_lessons :lesson_id="id"></form_lessons>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'id'
    ],
}
</script>
