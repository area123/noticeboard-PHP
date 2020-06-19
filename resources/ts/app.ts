import "./bootstrap";

window.onload = () => {
    const logoutBtn: HTMLAnchorElement = <HTMLAnchorElement>document.getElementById('logout');
    const logoutForm: HTMLFormElement = <HTMLFormElement>document.getElementById('logout-form');

    if (logoutBtn) {
        logoutBtn.addEventListener('click', (e: MouseEvent) => {
            e.preventDefault();
            logoutForm.submit();
        });
    }
};
