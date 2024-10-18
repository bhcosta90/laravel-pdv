@props([
    'message',
])
<div
    id="info-modal"
    x-data="{
        alerts: [],
        add(alert) {
            this.alerts.push(alert)
        },
    }"
    @notification::alerts.window="add($event.detail)"
>
    <div class="toast toast-top toast-end">
        <template x-for="alert in alerts">
            <x-toast success />
        </template>
    </div>
</div>
