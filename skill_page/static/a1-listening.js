document.addEventListener("DOMContentLoaded", function() {
    const submitButton = document.getElementById("submitBtn");
    const resetButton = document.getElementById("resetBtn");
    const answerForms = document.querySelectorAll(".answerB form");
    const resultBox = document.getElementById("resultBox");
    const correctCountDisplay = document.getElementById("correctCount");
    const incorrectCountDisplay = document.getElementById("incorrectCount");
    const questionResultContainer = document.querySelector(".question-result");
  
    let correctCount = 0;
    let incorrectCount = 0;
  
    submitButton.addEventListener("click", function() {
        answerForms.forEach((form, index) => {
            const selectedAnswer = form.querySelector("input:checked");
            const questionResult = questionResultContainer.querySelector(`#q${index + 1}Result`);
  
            if (selectedAnswer) {
                if (selectedAnswer.getAttribute("data-correct-answer")) {
                    correctCount++;
                    questionResult.textContent = "True";
                    questionResult.style.color = "green";
                } else {
                    incorrectCount++;
                    questionResult.textContent = "False";
                    questionResult.style.color = "red";
                }
            }
        });
  
        correctCountDisplay.textContent = correctCount;
        incorrectCountDisplay.textContent = incorrectCount;
        resultBox.style.display = "block";
  
        submitButton.disabled = true;
        resetButton.disabled = false;
  
        // Hiển thị số câu hỏi đúng và sai
        questionResultContainer.style.display = "block";
    });
  
    resetButton.addEventListener("click", function() {
        answerForms.forEach((form) => {
            form.reset();
        });
  
        correctCount = 0;
        incorrectCount = 0;
  
        correctCountDisplay.textContent = correctCount;
        incorrectCountDisplay.textContent = incorrectCount;
        resultBox.style.display = "none";
  
        submitButton.disabled = false;
        resetButton.disabled = true;
  
        // Ẩn dòng kết quả
        questionResultContainer.style.display = "none";
    });
  });
  