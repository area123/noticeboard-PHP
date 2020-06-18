import {AxiosInstance, AxiosResponse, AxiosError} from "axios";

declare global {
    interface Window {
        axios: AxiosInstance;
    }
}

window.onload = () => {
    const removeBtns: HTMLButtonElement[] = <HTMLButtonElement[]>Array.from(document.getElementsByClassName('modal-close'));
    const submitBtn: HTMLButtonElement = <HTMLButtonElement>document.getElementById('submit');
    const save_modal: HTMLDivElement = <HTMLDivElement>document.getElementById('save');

    const id: HTMLInputElement[] = <HTMLInputElement[]>Array.from(document.getElementsByName('id'));
    const title: HTMLInputElement[] = <HTMLInputElement[]>Array.from(document.getElementsByName('title'));
    const sort: HTMLSelectElement[] = <HTMLSelectElement[]>Array.from(document.getElementsByName('sort'));
    const content: HTMLTextAreaElement[] = <HTMLTextAreaElement[]>Array.from(document.getElementsByName('content'));

    for (let removeBtn of removeBtns) {
        removeBtn.addEventListener('click', () => {
            save_modal.classList.remove('is-active');
        });
    }

    submitBtn.addEventListener('click', (e:MouseEvent) => {
        const post_data = {
            id: id[0].value,
            title: title[0].value,
            sort: sort[0].value,
            content: content[0].value
        };
        e.preventDefault();
        window.axios.post('/api/post', post_data)
            .then((res: AxiosResponse) => {
                const data = res.data;
                save_modal.classList.add('is-active');
            })
            .catch((e: AxiosError) => {
                console.log(e);
            });
    });
};
