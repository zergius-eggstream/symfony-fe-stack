import { Controller } from '@hotwired/stimulus';

/*
* The following line makes this controller "lazy": it won't be downloaded until needed
* See https://github.com/symfony/stimulus-bridge#lazy-controllers
*/
/* stimulusFetch: 'lazy' */
export default class extends Controller {
    static targets = ['count', 'clickBtn']
    static values = {
        startCount: Number,
    }
    
    connect() {
        this.count = this.startCountValue
        this.countTarget.innerText = this.count;
    }

    increment() {
        this.count++;
        this.countTarget.innerText = this.count;
        if (this.count > 100) {
            this.clickBtnTarget.classList.add('big');
        }
    }
}
