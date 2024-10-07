class Question {
    constructor(bank_id){
        this.id= null;
        this.title= "";
        this.mark= null;
        this.answer= null;
        this.image=null;
        this.has_image=0;
        this.level=null;
        this.type=null;
        this.unit_id=null;
        this.bank_id=bank_id;
        this.options=[];
        this.curriculum_id=null;
        this.lesson_id=null;
    }
}

export default Question;
