<template>
    <div id="empty">
        <div class="image">
            <img :src="`${storage_path}/no-found.png`" alt="" />
        </div>
        <p class="mt-4 font-weight-bold">
            {{ $trans("data.No Data Found") }}
        </p>
    </div>
</template>

<script>
export default {
    props: ["storage_path"],
};
</script>
