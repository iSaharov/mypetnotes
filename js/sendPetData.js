document.addEventListener("submit", () => {
    const ajaxSend = async(formData) => {
        const fetchResp = await fetch("addpet.php", {
            method: "POST", //В итоге, если не определить метод отправке в параметрах самой формы, все данные отправляются методом GET.
            body: formData
        });
        if (!fetchResp.ok) {
            throw new Error("Ошибка по адресу ${url}, статус ошибки ${fetchResp.status}");
        }
        return await fetchResp.text();
    };

    const forms = document.querySelectorAll("form");
    forms.forEach(form => {
        form.addEventListener("submit", function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            ajaxSend(formData)
                .then((response) => {
                    console.log(response);
                    form.reset();
                })
                .catch((err) => console.error(err))
        });
    });
});