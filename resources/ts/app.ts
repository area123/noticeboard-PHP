import "./bootstrap";
import {AxiosInstance, AxiosResponse, AxiosError} from "axios";

declare global {
    interface Window {
        axios: AxiosInstance;
    }
}

window.onload = () => {
    const logoutBtn: HTMLAnchorElement = <HTMLAnchorElement>document.getElementById('logout');
    const logoutForm: HTMLFormElement = <HTMLFormElement>document.getElementById('logout-form');

    logoutBtn.addEventListener('click', (e: MouseEvent) => {
        e.preventDefault();
        logoutForm.submit();
    });
};
