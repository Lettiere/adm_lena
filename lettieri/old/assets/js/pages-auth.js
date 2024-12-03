"use strict";
const formAuthentication = document.querySelector("#formAuthentication");
document.addEventListener("DOMContentLoaded", function (e) {
  var t;
  formAuthentication &&
    FormValidation.formValidation(formAuthentication, {
      fields: {
        username: {
          validators: {
            notEmpty: { message: "Por favor informa o e-mail" },
            stringLength: {
              min: 3,
              message: "O e-mail precisa ter mais que 3 caractéres",
            },
          },
        },
        email: {
          validators: {
            notEmpty: { message: "Faltou informar o e-mail" },
            emailAddress: { message: "Informe um e-mail válido" },
          },
        },
        email: {
          validators: {
            notEmpty: { message: "Por favor informe o e-mail" },
            stringLength: {
              min: 3,
              message: "O e-mail precisa ter mais que 3 caractéres",
            },
          },
        },
        password: {
          validators: {
            notEmpty: { message: "Por favor informe sua senha" },
            stringLength: {
              min: 3,
              message: "A senha precisa ter mais que 3 caractéres",
            },
          },
        },
        "confirm-password": {
          validators: {
            notEmpty: { message: "Por favor informe a mesma senha" },
            identical: {
              compare: function () {
                return formAuthentication.querySelector('[name="password"]')
                  .value;
              },
              message: "As senhas informadas precisam ser iguais",
            },
            stringLength: {
              min: 3,
              message: "A senha precisa ter mais de 3 caractéres",
            },
          },
        },
        terms: {
          validators: {
            notEmpty: { message: "Por favor aceite os Termos & Condições" },
          },
        },
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          eleValidClass: "",
          rowSelector: ".mb-3",
        }),
        submitButton: new FormValidation.plugins.SubmitButton(),
        defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
        autoFocus: new FormValidation.plugins.AutoFocus(),
      },
      init: (e) => {
        e.on("plugins.message.placed", function (e) {
          e.element.parentElement.classList.contains("input-group") &&
            e.element.parentElement.insertAdjacentElement(
              "afterend",
              e.messageElement
            );
        });
      },
    }),
    (t = document.querySelectorAll(".numeral-mask")).length &&
      t.forEach((e) => {
        new Cleave(e, { numeral: !0 });
      });
});
