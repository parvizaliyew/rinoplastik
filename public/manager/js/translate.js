'use strict';

let langs = document.querySelectorAll('.lang a');
let translates = document.querySelectorAll('.translate .form-control');

translates.forEach(translate => {
    translate.addEventListener('input', function () {
        let langVal = JSON.parse(translate.previousElementSibling.value);
        let currentLang = document.querySelector('.lang a.active').getAttribute('href');
        langVal[currentLang] = translate.value;
        translate.previousElementSibling.value = JSON.stringify(langVal);
    });
});

langs.forEach(lang => {
    lang.addEventListener('click', function (e) {
        e.preventDefault();
        let lan = lang.getAttribute('href');
        if (document.getElementById('editor')) {
            let editor = JSON.parse(document.getElementById('editor').previousElementSibling.value);
            CKEDITOR.instances.editor.setData(editor[lan]);
        }
        if (document.getElementById('editor1')) {
            let editor1 = JSON.parse(document.getElementById('editor1').previousElementSibling.value);
            CKEDITOR.instances.editor1.setData(editor1[lan]);
        }
        if (document.getElementById('editor2')) {
            let editor2 = JSON.parse(document.getElementById('editor2').previousElementSibling.value);
            CKEDITOR.instances.editor2.setData(editor2[lan]);
        }
        if (document.getElementById('editor3')) {
            let editor3 = JSON.parse(document.getElementById('editor3').previousElementSibling.value);
            CKEDITOR.instances.editor3.setData(editor3[lan]);
        }
        if (document.getElementById('editor4')) {
            let editor4 = JSON.parse(document.getElementById('editor4').previousElementSibling.value);
            CKEDITOR.instances.editor4.setData(editor4[lan]);
        }
        if (document.getElementById('editor5')) {
            let editor5 = JSON.parse(document.getElementById('editor5').previousElementSibling.value);
            CKEDITOR.instances.editor5.setData(editor5[lan]);
        }
        clearInputs(lan);
        removeActives();
        lang.classList.add('active');
    });
});

const removeActives = () => {
    langs.forEach(lang => {
        lang.classList.remove('active');
    })
}

const clearInputs = (lang) => {
    translates.forEach(translate => {
        translate.value = JSON.parse(translate.previousElementSibling.value)[lang];
    })
}
