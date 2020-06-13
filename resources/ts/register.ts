import {AxiosInstance, AxiosResponse, AxiosError} from "axios";

declare global {
    interface Window {
        axios: AxiosInstance;
    }
}

window.onload = () => {
    const removeBtns: HTMLButtonElement[] = <HTMLButtonElement[]>Array.from(document.getElementsByClassName('modal-close'));
    const email_check_success_Btn: HTMLButtonElement = <HTMLButtonElement>document.getElementById('email_check_success');
    const email_check_failed_Btn: HTMLButtonElement = <HTMLButtonElement>document.getElementById('email_check_failed');
    const check: HTMLButtonElement = <HTMLButtonElement>document.getElementById('check');
    const email: HTMLInputElement = <HTMLInputElement>document.getElementById('email');

    for (let removeBtn of removeBtns) {
        removeBtn.addEventListener('click', () => {
            email_check_success_Btn.classList.remove('is-active');
            email_check_failed_Btn.classList.remove('is-active');
        });
    }

    check.addEventListener('click', () => {
        window.axios.get('/api/user/check', {
            params: {
                email: email.value
            }
        }).then((res: AxiosResponse) => {
            const data = res.data;
            if (data.success) {
                email_check_success_Btn.classList.add('is-active');
            } else {
                email_check_failed_Btn.classList.add('is-active');
            }
        }).catch((err: AxiosError) => {
            console.log(err);
        });
    });
};
