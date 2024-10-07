<template>
    <div class="reply">
        <div class="reply-inner">
            <div class="name-time">
                <span class="name">{{ replay.name }}</span
                ><span class="time">9 {{ $trans("data.min ago") }}</span>
            </div>
            <p>
                {{ replay.description }}
            </p>
            <div class="react text-primary">
                <span
                    ><i class="mdi mdi-thumb-up-outline"></i>
                    {{ $trans("data.like") }}</span
                ><span
                    ><i class="mdi mdi-microphone-variant"></i>
                    {{ $trans("data.Report") }}</span
                ><span
                    ><i class="mdi mdi-account-check"></i>
                    {{ $trans("data.Number of likes") }}: 12</span
                >
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:[
        'replay'
    ]
}
</script>
