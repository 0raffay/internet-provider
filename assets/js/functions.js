/******************
   tabbingByTarget 
 ******************/
tabbingByTarget({
  buttonAttr: "rfTabbing-open", //Define Button
  targetAttr: "rfTabbing-target", //Define Target Which Button Interacts with
  initialHideAll: true, //Hides All Targets And Removes Active Class Initally From all buttons
  initialHide: true, //Hide All Targets Execept From 1st one
  nothingOnActive: true, // Removes Hide Show Functionality if Button is clicked once

}, function (button, target, clickCount, targetName) {

  //do something 
  if (clickCount > 1) {
    //do something else if button was clicked before.
  }
})

function tabbingByTarget(options, callback) {
  const selector = {
    button: options.buttonAttr ? options.buttonAttr : "rf-tabbing-button",
    target: options.targetAttr ? options.targetAttr : "rf-tabbing-target",
  }
  const buttons = $(`[${selector.button}]`);
  const targets = $(`[${selector.target}]`);
  if (options.initialHideAll) {
    buttons.removeClass("active");
    targets.removeClass("active").hide();
  }
  else if (options.initialHide) {
    buttons.eq(0).addClass("active");
    targets.not(":first-of-type").hide();
    targets.eq(0).addClass("active").show();
  }
  let clickCount = 1;
  buttons.click(function () {
    let wasActive = $(this).hasClass("active");
    if (options.nothingOnActive && wasActive) {
      return;
    }
    if (wasActive & clickCount < 4) {
      clickCount++;
    } else {
      clickCount = 1;
    }

    let thisButton = $(this);
    let target = thisButton.attr(`${selector.button}`);
    let allElementsToShow = targets.filter(`[${selector.target}="${target}"]`);
    if (allElementsToShow.length != 0) {
      buttons.removeClass("active");
      thisButton.addClass("active");
      targets.removeClass("active").hide();
      allElementsToShow.each(function () {
        $(this).show();
      });
      if (callback) {
        callback(thisButton, allElementsToShow, clickCount, target);
      }
    } else {
      thisButton.addClass("disabled")
    }
    thisButton.removeClass("disabled");
  });
}