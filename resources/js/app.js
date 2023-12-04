import './bootstrap.js';
import '@coreui/coreui/dist/js/coreui.bundle.min.js';
import { Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm'

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

Livewire.start()
