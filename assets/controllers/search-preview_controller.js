import { Controller } from '@hotwired/stimulus';
import { Modal } from 'bootstrap';
import $ from 'jquery';
export default class extends Controller {
    static targets = ['rez'];

    static values = {
        url: String,
    }

    async onSearchInput(event) {
        const params = new URLSearchParams({
            q: event.currentTarget.value,
            preview: 1,
        });
        const response = await fetch(`${this.urlValue}?${params.toString()}`);

        this.rezTarget.innerHTML = await response.text();
    }
}