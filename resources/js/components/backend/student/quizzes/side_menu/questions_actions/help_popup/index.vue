  <template>
    <div class="help_popup">
        <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="helpModalLabel">Help</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="helper">
              <div class="buttons_helper">
                <h4>Buttons</h4>
                <p><strong class="text-primary">Next: </strong>This Button will move you to the next question</p>
                <p><strong class="text-primary">Previous: </strong>This Button will move you to the previous question</p>
                <p><strong class="text-primary">Mark for review & Next: </strong>This Button will move you to the next question but will color the question pallete with orange to notify you that you need to review this question</p>
                <p><strong class="text-primary">Clear answer: </strong>This button will remove your answer from the current question</p>
                <p><strong class="text-primary">Instructions: </strong>This button will view for you a popup for the instructions list that you <strong>MUST</strong> follow</p>
                <p><strong class="text-primary">Help: </strong>This button will view for you a popup that helps you</p>
                <p><strong class="text-primary">Review questions: </strong>This button will send you to the first question that is marked for review</p>
                <p><strong class="text-primary">End Exam: </strong>This button will end your exam <strong>BE CAREFULL IF YOU PRESSED ON THIS BUTTUN YOU WILL NEVER GO BACK TO THE EXAM ONCE AGAIN</strong></p>
            </div>
            <div class="colors_helper">
                <h4>Colors</h4>
                <p><strong class="text-info">Blue: </strong>The blue color on a question pallete means that you did not visit this question yet</p>
                <p><strong class="text-danger">Red: </strong>The red color on a question pallete means that you did not answer this question yet</p>
                <p><strong class="text-warning">Orange: </strong>The orange color on a question pallete means that you marked this question for review</p>
                <p><strong class="text-success">Green: </strong>The red color on a question pallete means that you answered this question</p>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    </div>
  </template>