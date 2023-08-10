document.addEventListener("DOMContentLoaded", function () {
  const button = document.querySelector("button");

  button.addEventListener("click", function (event) {
    event.preventDefault();

    const name_value = document.querySelector(".name_feedback");
    const email_value = document.querySelector(".email_feedback");
    const question_value = document.querySelector(".quest_feedback");

    const name_mes = document.querySelector("#label_name");
    const email_mes = document.querySelector("#label_email");
    const question_mes = document.querySelector("#label_quest");

    const reg_name = /.+/;
    let flag_name = false;

    if (reg_name.test(name_value.value)) {
      console.log("Name - GOOD");
      name_value.style.border = "3px solid rgb(0, 196, 0)";
      name_mes.style.color = "rgb(0, 196, 0)";
      name_mes.innerHTML = "Ваше имя:";
      flag_name = true;
    } else {
      console.log("Name = NULL");
      name_value.style.border = "3px solid rgb(255, 0, 0)";
      name_mes.style.color = "rgb(255, 0, 0)";
      name_mes.innerHTML = "Поле Имя не может быть пустым !";
      flag_name = false;
    }

    const reg_email = /^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/;
    let flag_email = false;

    if (reg_email.test(email_value.value)) {
      console.log("Email - GOOD");
      email_value.style.border = "3px solid rgb(0, 196, 0)";
      email_mes.style.color = "rgb(0, 196, 0)";
      email_mes.innerHTML = "Ваш E-mail:";
      flag_email = true;
    } else {
      console.log("Email = NULL");
      email_value.style.border = "3px solid rgb(255, 0, 0)";
      email_mes.style.color = "rgb(255, 0, 0)";
      email_mes.innerHTML =
        "Поле E-mail заполненно не корректно, пример: name@mail.com.";
      flag_email = false;
    }

    const reg_question = question_value.value.length;
    let flag_question = false;

    if (reg_question <= 50 && reg_question != 0) {
      console.log("Quest - GOOD");
      question_value.style.border = "3px solid rgb(0, 196, 0)";
      question_mes.style.color = "rgb(0, 196, 0)";
      question_mes.innerHTML = "Задайте вопрос:";
      flag_question = true;
    } else if (reg_question > 50) {
      question_value.style.border = "3px solid rgb(255, 0, 0)";
      question_mes.style.color = "rgb(255, 0, 0)";
      question_mes.innerHTML = `Максимальное количество символов 50, вы ввели - ${reg_question}`;
      flag_question = false;
    } else if (reg_question == 0) {
      question_value.style.border = "3px solid rgb(255, 0, 0)";
      question_mes.style.color = "rgb(255, 0, 0)";
      question_mes.innerHTML = "Задайте вопрос:";
      flag_question = false;
    }

    if (flag_name == true && flag_email == true && flag_question == true) {
      console.log("Все хорошо");
      const form = document.querySelector("#form").submit();
    }
  });
});

//--title--(Можно и удалить)--start--
window.addEventListener("blur", function () {
  document.title = "Come Back ;(";
});
window.addEventListener("focus", function () {
  document.title = "FEEDBACK";
});
//--title--end--
