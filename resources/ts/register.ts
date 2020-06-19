import {AxiosInstance, AxiosResponse, AxiosError} from "axios";

declare global {
    interface Window {
        axios: AxiosInstance;
    }
}

window.onload = () => {
    const logoutBtn: HTMLAnchorElement = <HTMLAnchorElement>document.getElementById('logout');
    const logoutForm: HTMLFormElement = <HTMLFormElement>document.getElementById('logout-form');

    if (logoutBtn) {
        logoutBtn.addEventListener('click', (e: MouseEvent) => {
            e.preventDefault();
            logoutForm.submit();
        });
    }

    const removeBtns: HTMLButtonElement[] = <HTMLButtonElement[]>Array.from(document.getElementsByClassName('modal-close'));
    const email_check_success_div: HTMLDivElement = <HTMLDivElement>document.getElementById('email_check_success');
    const email_check_failed_div: HTMLDivElement = <HTMLDivElement>document.getElementById('email_check_failed');
    const check: HTMLButtonElement = <HTMLButtonElement>document.getElementById('check');
    const email: HTMLInputElement = <HTMLInputElement>document.getElementById('email');
    const password: HTMLInputElement = <HTMLInputElement>document.getElementById('password');
    const name: HTMLInputElement = <HTMLInputElement>document.getElementById('name');
    const birthday: HTMLInputElement = <HTMLInputElement>document.getElementById('birthday');
    const phone: HTMLInputElement = <HTMLInputElement>document.getElementById('phone');
    const sex: HTMLInputElement[] = <HTMLInputElement[]>Array.from(document.getElementsByName('sex'));
    const thumbnail: HTMLInputElement = <HTMLInputElement>document.querySelector('#thumbnail input[type=file]');
    const fileName: HTMLSpanElement = <HTMLSpanElement>document.querySelector('#thumbnail .file-name');
    const submit: HTMLButtonElement = <HTMLButtonElement>document.getElementById('submit');

    for (let removeBtn of removeBtns) {
        removeBtn.addEventListener('click', () => {
            email_check_success_div.classList.remove('is-active');
            email_check_failed_div.classList.remove('is-active');
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
                email_check_success_div.classList.add('is-active');
            } else {
                email_check_failed_div.classList.add('is-active');
            }
        }).catch((err: AxiosError) => {
            console.log(err);
        });
    });

    /*submit.addEventListener('click', (e: MouseEvent) => {
        e.preventDefault();
        const formData = new FormData();
        let sex_data = '';
        formData.append('email', email.value);
        formData.append('password', password.value);
        formData.append('name', name.value);
        formData.append('birthday', birthday.value);
        formData.append('phone', phone.value);
        for (const data of sex) {
            if (data.checked) {
                sex_data = data.value;
                formData.append('sex', data.value);
            }
        }
        if (thumbnail.files!.length > 0) {
            formData.append('thumbnail', thumbnail.files![0].name);
        }
        console.log(email.value);
        console.log(password.value);
        console.log(name.value);
        console.log(birthday.value);
        console.log(phone.value);
        console.log(sex_data);
        console.log(thumbnail.files![0].name);
        window.axios.post('/user/register', {
            email: email.value,
            password: password.value,
            name: name.value,
            birthday: birthday.value,
            phone: phone.value,
            sex: sex_data,
            thumbnail: thumbnail.files![0].name
        })
            .then((res: AxiosResponse) => {
                console.log(res.data);
            }).catch((e: AxiosError) => {
            console.log(e);
        });
    });*/

    thumbnail.onchange = () => {
        if (thumbnail.files!.length > 0) {
            fileName!.textContent = thumbnail.files![0].name;
        }
    };
};
