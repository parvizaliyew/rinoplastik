'use strict';

CKEDITOR.replace('editor');
CKEDITOR.replace('editor1');
CKEDITOR.replace('editor2');
CKEDITOR.replace('editor3');
CKEDITOR.replace('editor4');
CKEDITOR.replace('editor5');

CKEDITOR.instances.editor.on('change', function () {
    let value = this.getData();
    let langVal = JSON.parse(document.getElementById(this.name).previousElementSibling.value);
    let currentLang = document.querySelector('.lang a.active').getAttribute('href');
    langVal[currentLang] = value;
    document.getElementById(this.name).previousElementSibling.value = JSON.stringify(langVal); 

});

CKEDITOR.instances.editor1.on('change', function () {
    let value = this.getData();
    let langVal = JSON.parse(document.getElementById(this.name).previousElementSibling.value);
    let currentLang = document.querySelector('.lang a.active').getAttribute('href');
    langVal[currentLang] = value;
    document.getElementById(this.name).previousElementSibling.value = JSON.stringify(langVal); 
});

CKEDITOR.instances.editor2?.on('change', function () {
    let value = this.getData();
    let langVal = JSON.parse(document.getElementById(this.name).previousElementSibling.value);
    let currentLang = document.querySelector('.lang a.active').getAttribute('href');
    langVal[currentLang] = value;
    document.getElementById(this.name).previousElementSibling.value = JSON.stringify(langVal); 
});

CKEDITOR.instances.editor3.on('change', function () {
    let value = this.getData();
    let langVal = JSON.parse(document.getElementById(this.name).previousElementSibling.value);
    let currentLang = document.querySelector('.lang a.active').getAttribute('href');
    langVal[currentLang] = value;
    document.getElementById(this.name).previousElementSibling.value = JSON.stringify(langVal); 
});
CKEDITOR.instances.editor4.on('change', function () {
    let value = this.getData();
    let langVal = JSON.parse(document.getElementById(this.name).previousElementSibling.value);
    let currentLang = document.querySelector('.lang a.active').getAttribute('href');
    langVal[currentLang] = value;
    document.getElementById(this.name).previousElementSibling.value = JSON.stringify(langVal); 
});
CKEDITOR.instances.editor5.on('change', function () {
    let value = this.getData();
    let langVal = JSON.parse(document.getElementById(this.name).previousElementSibling.value);
    let currentLang = document.querySelector('.lang a.active').getAttribute('href');
    langVal[currentLang] = value;
    document.getElementById(this.name).previousElementSibling.value = JSON.stringify(langVal); 
});
