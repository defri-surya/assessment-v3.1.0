//DOM elements
const DOMstrings = {
  stepsBtnClass: "multisteps-form__progress-btn",
  stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
  stepsBar: document.querySelector(".multisteps-form__progress"),
  stepsForm: document.querySelector(".multisteps-form__form"),
  stepsFormTextareas: document.querySelectorAll(".multisteps-form__textarea"),
  stepFormPanelClass: "multisteps-form__panel",
  stepFormPanels: document.querySelectorAll(".multisteps-form__panel"),
  stepPrevBtnClass: "js-btn-prev",
  stepNextBtnClass: "js-btn-next"
};

//remove class from a set of items
const removeClasses = (elemSet, className) => {
  elemSet.forEach(elem => {
    elem.classList.remove(className);
  });
};

//return exect parent node of the element
const findParent = (elem, parentClass) => {
  let currentNode = elem;

  while (!currentNode.classList.contains(parentClass)) {
    currentNode = currentNode.parentNode;
  }

  return currentNode;
};

//get active button step number
const getActiveStep = elem => {
  return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

//set all steps before clicked (and clicked too) to active
const setActiveStep = activeStepNum => {
  //remove active state from all the state
  removeClasses(DOMstrings.stepsBtns, "js-active");

  //set picked items to active
  DOMstrings.stepsBtns.forEach((elem, index) => {
    if (index <= activeStepNum) {
      elem.classList.add("js-active");
    }
  });
};

//get active panel
const getActivePanel = () => {
  let activePanel;

  DOMstrings.stepFormPanels.forEach(elem => {
    if (elem.classList.contains("js-active")) {
      activePanel = elem;
    }
  });

  return activePanel;
};

//open active panel (and close unactive panels)
const setActivePanel = activePanelNum => {
  //remove active class from all the panels
  removeClasses(DOMstrings.stepFormPanels, "js-active");

  //show active panel
  DOMstrings.stepFormPanels.forEach((elem, index) => {
    if (index === activePanelNum) {
      elem.classList.add("js-active");

      setFormHeight(elem);
    }
  });
};

//set form height equal to current panel height
const formHeight = activePanel => {
  const activePanelHeight = activePanel.offsetHeight;

  DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
};

const setFormHeight = () => {
  const activePanel = getActivePanel();

  formHeight(activePanel);
};

//STEPS BAR CLICK FUNCTION
DOMstrings.stepsBar.addEventListener("click", e => {
  //check if click target is a step button
  const eventTarget = e.target;

  if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
    return;
  }

  //get active button step number
  const activeStep = getActiveStep(eventTarget);

  //set all steps before clicked (and clicked too) to active
  setActiveStep(activeStep);

  //open active panel
  setActivePanel(activeStep);
});

function validateStep(step) {
  if (step === 1) {
    // Validation logic for Step 1
    const radioGroupStep1R1 = document.querySelectorAll("[name^='r1_']");
    const radioGroupStep1I1 = document.querySelectorAll("[name^='i1_']");
    const radioGroupStep1A1 = document.querySelectorAll("[name^='a1_']");
    const radioGroupStep1S1 = document.querySelectorAll("[name^='s1_']");
    const radioGroupStep1E1 = document.querySelectorAll("[name^='e1_']");
    const radioGroupStep1C1 = document.querySelectorAll("[name^='c1_']");

    // Check if at least one radio button is checked for each question
    for (const radio of radioGroupStep1R1) {
      const questionNumber = radio.name.split("_")[1];
      const isAnyCheckedR1 = document.querySelector(
        `[name='r1_${questionNumber}']:checked`
      );

      if (!isAnyCheckedR1) {
        alert(
          `Please select an option for Question R1 Number ${questionNumber}.`
        );
        return false;
      }
    }

    for (const radio of radioGroupStep1I1) {
      const questionNumber = radio.name.split("_")[1];
      const isAnyCheckedI1 = document.querySelector(
        `[name='i1_${questionNumber}']:checked`
      );
      if (!isAnyCheckedI1) {
        alert(
          `Please select an option for Question I1 Number ${questionNumber}.`
        );
        return false;
      }
    }

    for (const radio of radioGroupStep1A1) {
      const questionNumber = radio.name.split("_")[1];
      const isAnyCheckedA1 = document.querySelector(
        `[name='a1_${questionNumber}']:checked`
      );
      if (!isAnyCheckedA1) {
        alert(
          `Please select an option for Question A1 Number ${questionNumber}.`
        );
        return false;
      }
    }

    for (const radio of radioGroupStep1S1) {
      const questionNumber = radio.name.split("_")[1];
      const isAnyCheckedS1 = document.querySelector(
        `[name='s1_${questionNumber}']:checked`
      );
      if (!isAnyCheckedS1) {
        alert(
          `Please select an option for Question S1 Number ${questionNumber}.`
        );
        return false;
      }
    }

    for (const radio of radioGroupStep1E1) {
      const questionNumber = radio.name.split("_")[1];
      const isAnyCheckedE1 = document.querySelector(
        `[name='e1_${questionNumber}']:checked`
      );
      if (!isAnyCheckedE1) {
        alert(
          `Please select an option for Question E1 Number ${questionNumber}.`
        );
        return false;
      }
    }

    for (const radio of radioGroupStep1C1) {
      const questionNumber = radio.name.split("_")[1];
      const isAnyCheckedC1 = document.querySelector(
        `[name='c1_${questionNumber}']:checked`
      );
      if (!isAnyCheckedC1) {
        alert(
          `Please select an option for Question C1 Number ${questionNumber}.`
        );
        return false;
      }
    }
  }

  if (step === 2) {
    // Validation logic for Step 2
    const radioGroupStep1R2 = document.querySelectorAll("[name^='r2_']");
    const radioGroupStep1I2 = document.querySelectorAll("[name^='i2_']");
    const radioGroupStep1A2 = document.querySelectorAll("[name^='a2_']");
    const radioGroupStep1S2 = document.querySelectorAll("[name^='s2_']");
    const radioGroupStep1E2 = document.querySelectorAll("[name^='e2_']");
    const radioGroupStep1C2 = document.querySelectorAll("[name^='c2_']");

    // Check if at least one radio button is checked for each question
    for (const radio of radioGroupStep1R2) {
      const questionNumber = radio.name.split("_")[1];
      const isAnyCheckedR2 = document.querySelector(
        `[name='r2_${questionNumber}']:checked`
      );

      if (!isAnyCheckedR2) {
        alert(
          `Please select an option for Question R2 Number ${questionNumber}.`
        );
        return false;
      }
    }

    for (const radio of radioGroupStep1I2) {
      const questionNumber = radio.name.split("_")[1];
      const isAnyCheckedI2 = document.querySelector(
        `[name='i2_${questionNumber}']:checked`
      );
      if (!isAnyCheckedI2) {
        alert(
          `Please select an option for Question I2 Number ${questionNumber}.`
        );
        return false;
      }
    }

    for (const radio of radioGroupStep1A2) {
      const questionNumber = radio.name.split("_")[1];
      const isAnyCheckedA2 = document.querySelector(
        `[name='a2_${questionNumber}']:checked`
      );
      if (!isAnyCheckedA2) {
        alert(
          `Please select an option for Question A2 Number ${questionNumber}.`
        );
        return false;
      }
    }

    for (const radio of radioGroupStep1S2) {
      const questionNumber = radio.name.split("_")[1];
      const isAnyCheckedS2 = document.querySelector(
        `[name='s2_${questionNumber}']:checked`
      );
      if (!isAnyCheckedS2) {
        alert(
          `Please select an option for Question S2 Number ${questionNumber}.`
        );
        return false;
      }
    }

    for (const radio of radioGroupStep1E2) {
      const questionNumber = radio.name.split("_")[1];
      const isAnyCheckedE2 = document.querySelector(
        `[name='e2_${questionNumber}']:checked`
      );
      if (!isAnyCheckedE2) {
        alert(
          `Please select an option for Question E2 Number ${questionNumber}.`
        );
        return false;
      }
    }

    for (const radio of radioGroupStep1C2) {
      const questionNumber = radio.name.split("_")[1];
      const isAnyCheckedC2 = document.querySelector(
        `[name='c2_${questionNumber}']:checked`
      );
      if (!isAnyCheckedC2) {
        alert(
          `Please select an option for Question C2 Number ${questionNumber}.`
        );
        return false;
      }
    }
  }

  // Add validation logic for other steps if needed

  return true;
}

// Function to handle button clicks
DOMstrings.stepsForm.addEventListener("click", e => {
  const eventTarget = e.target;

  if (
    !(
      eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) ||
      eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)
    )
  ) {
    return;
  }

  const activePanel = findParent(
    eventTarget,
    `${DOMstrings.stepFormPanelClass}`
  );

  let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(
    activePanel
  );

  if (eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)) {
    // If NEXT button is clicked, perform validation for the current step
    if (!validateStep(activePanelNum + 1)) {
      return;
    }
  }

  // Set active step and active panel onclick
  if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
    activePanelNum--;
  } else {
    activePanelNum++;
  }

  setActiveStep(activePanelNum);
  setActivePanel(activePanelNum);
});

//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener("load", setFormHeight, false);

//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener("resize", setFormHeight, false);

//changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)

const setAnimationType = newType => {
  DOMstrings.stepFormPanels.forEach(elem => {
    elem.dataset.animation = newType;
  });
};
