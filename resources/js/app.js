import './bootstrap';
import intersect from '@alpinejs/intersect'
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse'

Alpine.plugin(intersect)
Alpine.plugin(collapse)

window.Alpine = Alpine;
Alpine.start();