
const Add_Req_bttn = document.getElementById('add_req');


function AddwithRemove(container_id, Name) {

    const divv = document.createElement('div');
    divv.classList.add('d-flex');


    const Add_Req_Text = document.createElement('input');
    Add_Req_Text.setAttribute('name', Name);
    const Close_bttn = document.createElement('button');
    Close_bttn.textContent = '❌';
    Add_Req_Text.classList.add('form-control')
    Add_Req_Text.style.marginBottom = '5px'
    let div_before_bttn = document.getElementById(container_id);
    div_before_bttn.appendChild(divv);
    divv.appendChild(Add_Req_Text);
    divv.appendChild(Close_bttn);

    // Add_Req_bttn.style.marginTop = '10px';
    Close_bttn.style.border = 'none';
    Close_bttn.style.backgroundColor = 'white';
    Close_bttn.onclick = function RemoveReq() {
        divv.removeChild(Close_bttn);
        divv.removeChild(Add_Req_Text);

    }
}




function Addlevel() {

    const divv = document.createElement('div');
    divv.classList.add('d-flex');

    const divv1 = document.createElement('div');
    divv1.classList.add('d-flex');
    divv1.classList.add('flex-column');


    const divv2 = document.createElement('div');



    const Add_Req_Text = document.createElement('input');
    Add_Req_Text.setAttribute('name', 'level');
    Add_Req_Text.classList.add('courseLevel')

    Add_Req_Text.setAttribute('Placeholder', 'Enter level');
    Add_Req_Text.style.marginBottom = '5px';

    const Add_Req_Number = document.createElement('input');
    Add_Req_Number.setAttribute('name', 'price');
    Add_Req_Number.classList.add('courseLevel')
    Add_Req_Number.setAttribute('type', 'number')
    Add_Req_Number.classList.add('form-control')
    Add_Req_Number.style.marginBottom = '5px';


    const Close_bttn = document.createElement('button');
    Close_bttn.textContent = '❌';
    Add_Req_Text.classList.add('form-control')

    let div_before_bttn = document.getElementById('inp4');
    div_before_bttn.appendChild(divv);
    divv.appendChild(divv1);
    divv.appendChild(divv2);


    divv1.appendChild(Add_Req_Text);
    divv1.appendChild(Add_Req_Number);
    divv2.appendChild(Close_bttn);

    // Add_Req_bttn.style.marginTop = '10px';
    Close_bttn.style.border = 'none';
    Close_bttn.style.backgroundColor = 'white';
    Close_bttn.onclick = function RemoveReq() {
        divv2.removeChild(Close_bttn);
        divv1.removeChild(Add_Req_Text);
        divv1.removeChild(Add_Req_Number);


    }
}

// Add_Req_bttn.addEventListener('click', () => AddwithRemove('inp'))

function AddModule() {
    let module = document.querySelectorAll(".Module")
    module.length == 0 ? module = 1 : module = module.length + 1
    const divvKaber = document.createElement('div');
    let div_before_bttn = document.getElementById('inp5');
    div_before_bttn.appendChild(divvKaber);

    const Add_Req_Text = document.createElement('input');
    Add_Req_Text.setAttribute('placeholder', 'Module Title')
    Add_Req_Text.setAttribute('name', 'Module_Title');
    Add_Req_Text.classList.add(`M${module}`);
    Add_Req_Text.classList.add(`CurriculumInputs`);
    Add_Req_Text.classList.add(`Module`);


    const Close_bttn = document.createElement('button');
    Close_bttn.textContent = '❌';
    Add_Req_Text.classList.add('form-control')



    const divv = document.createElement('div');
    divv.classList.add('d-flex');

    const Add_lesson = document.createElement('button');
    Add_lesson.classList.add(`M${module}`);
    Add_lesson.classList.add('btn');
    Add_lesson.classList.add('btn-success');
    Add_lesson.classList.add('Add_lesson');

    Add_lesson.innerText = 'Add lesson';
    Add_lesson.style.marginTop = '5px'
    Add_lesson.style.marginBottom = '5px'

    const divvFady = document.createElement('div');




    divvKaber.appendChild(divv);
    divv.appendChild(Add_Req_Text);
    divv.appendChild(Close_bttn);
    divvKaber.appendChild(divvFady);
    divvKaber.appendChild(Add_lesson);


    // Add_Req_bttn.style.marginTop = '10px';
    Close_bttn.style.border = 'none';
    Close_bttn.style.backgroundColor = 'white';


    Close_bttn.onclick = function RemoveReq() {
        div_before_bttn.removeChild(divvKaber);
        let modules = document.querySelectorAll(".Module")
        let Add_Lesson_bttns = document.querySelectorAll(".Add_lesson")
        Add_Lesson_bttns.forEach((Add_Lesson_bttn, index) => {
            const current_class = Add_Lesson_bttn.classList.item(0)
            const new_class = `M${index + 1}`
            Add_Lesson_bttn.classList.replace(current_class, new_class)


        })
        modules.forEach((module, index) => {
            let Module_ClassList = module.classList
            const current_class = Module_ClassList.item(0)
            const new_class = `M${index + 1}`
            Add_lesson.classList.replace(Add_lesson.classList.item(0), new_class)
            module.classList.replace(current_class, new_class)

        })

    }
    Add_Module_bttn.style.marginTop = '5px'

    Add_lesson.addEventListener('click', Addlesson);
    getCurriculms()
}
// Define this globally or outside the function so it persists
let lessonCounters = {};

function Addlesson(e) {
    let lessons = document.querySelectorAll(".Lesson_Title")
    lessons.length == 0 ? lessons = 1 : lessons = lessons.length + 1
    let clicked = e.target;
    const divvKaber = document.createElement('div');
    let divKaber_of_AddModule = clicked.previousElementSibling;
    divKaber_of_AddModule.appendChild(divvKaber);


    let moduleCode = clicked.classList[0];


    if (!lessonCounters[moduleCode]) {
        lessonCounters[moduleCode] = 1;  //M1=1
    } else {
        lessonCounters[moduleCode]++;
    }


    const divv_with_flex_class = document.createElement('div');
    divv_with_flex_class.classList.add('d-flex');

    const Add_content = document.createElement('button');
    Add_content.classList.add(`${moduleCode}-l${lessonCounters[moduleCode]}`);
    // Add_content.classList.add(`${clicked.classList[0]}-l${lessons}`);
    Add_content.classList.add('btn');
    Add_content.classList.add('btn-success');
    Add_content.classList.add('Add_content');


    Add_content.innerText = 'Add Content';

    Add_content.style.marginTop = '5px'
    Add_content.style.marginBottom = '5px'


    const Add_Req_Text = document.createElement('input');
    Add_Req_Text.setAttribute('placeholder', 'Lesson Title')

    Add_Req_Text.setAttribute('name', 'Lesson_Title')
    //Add_Req_Text.classList.add(clicked.classList[0] + "-l" + lessons);
    Add_Req_Text.classList.add(`${moduleCode}-l${lessonCounters[moduleCode]}`);
    Add_Req_Text.classList.add('CurriculumInputs');
    Add_Req_Text.classList.add('Lesson_Title');

    Add_Req_Text.style.marginLeft = '10px'
    const Close_bttn = document.createElement('button');
    Close_bttn.textContent = '❌';
    Close_bttn.classList.add(`${moduleCode}-l${lessonCounters[moduleCode]}`);

    Add_Req_Text.classList.add('form-control')

    divv_with_flex_class.appendChild(Add_Req_Text);
    divv_with_flex_class.appendChild(Close_bttn);

    divvKaber.appendChild(divv_with_flex_class);
    const divvFady = document.createElement('div');
    divvKaber.appendChild(divvFady);
    divvKaber.appendChild(Add_content);

    // Add_Req_bttn.style.marginTop = '10px';
    Close_bttn.style.border = 'none';
    Close_bttn.style.backgroundColor = 'white';
    Close_bttn.onclick = function RemoveReq(e) {
        let removedInput = e.target.previousElementSibling.classList[0];
        let Lesson_titles_text = e.target.parentElement.parentElement.parentElement.querySelectorAll(`.Lesson_Title:not(.${removedInput})`)
        let [moduleCode, lessoncode] = e.target.classList[0].split("-");
        e.target.parentElement.parentElement.remove();

        lessonCounters = {};
        let Modelmap = newData.find(item => item.code === moduleCode);
        let lessonmap = Modelmap.lessons.find(item => item.code === lessoncode)
        // console.log(Modelmap.code)
        // console.log(lessonmap.code)

        // newData = newData.filter(item => !(item.code === Modelmap.code && item.code === lessonmap.code));
        // console.log(newData);
        const updatedData = newData.map(item => {
            if (item.code === Modelmap.code) {
                return {
                    ...item,
                    lessons: item.lessons.filter(lesson => lesson.code !== lessonmap.code)
                };
            }
            return item;
        });
        newData = updatedData;
        // console.log(updatedData);


        Lesson_titles_text.forEach((Lesson_title_text, index) => {
            let Lesson_title_text_ClassList = Lesson_title_text.classList
            const current_class = Lesson_title_text_ClassList.item(0)
            const new_class = `${moduleCode}-l${index + 1}`
            Lesson_title_text.classList.replace(current_class, new_class)


        })
        lessonCounters[moduleCode] = Lesson_titles_text.length;
        console.log(Lesson_titles_text);

    }
    // Add_Module.style.marginTop = '5px'

    Add_content.addEventListener('click', AddContent);
    getCurriculms()
}

function AddContent(e) {

    const divv_with_flex_class = document.createElement('div');
    divv_with_flex_class.classList.add('d-flex');

    let contents = document.querySelectorAll(".Lesson_Content")
    contents.length == 0 ? contents = 1 : contents = contents.length + 1
    const clicked = e.target;

    let divKaber_of_AddModule = clicked.previousElementSibling;
    divKaber_of_AddModule.appendChild(divv_with_flex_class);

    const Add_Req_Text = document.createElement('input');
    Add_Req_Text.setAttribute('placeholder', 'Lesson Content')
    Add_Req_Text.classList.add(`${clicked.classList[0]}-c${contents}`);
    Add_Req_Text.classList.add('Lesson_Content');
    Add_Req_Text.classList.add('CurriculumInputs');

    Add_Req_Text.style.marginLeft = '20px'
    Add_Req_Text.style.marginbottom = '10px'

    const Close_bttn = document.createElement('button');
    Close_bttn.textContent = '❌';
    Add_Req_Text.classList.add('form-control')

    divv_with_flex_class.appendChild(Add_Req_Text);
    divv_with_flex_class.appendChild(Close_bttn);



    // Add_Req_bttn.style.marginTop = '10px';
    Close_bttn.style.border = 'none';
    Close_bttn.style.backgroundColor = 'white';
    Close_bttn.onclick = function RemoveReq(e) {
        let removedInput = e.target.previousElementSibling.classList[0];
       //console.log(removedInput);

        let Lesson_Content_text = e.target.parentElement.parentElement.parentElement.querySelectorAll(`.Lesson_Content:not(.${removedInput})`)
       //console.log(Lesson_Content_text);
       
        let [moduleCode, lessoncode, ContentCode] = removedInput.split("-");
        divKaber_of_AddModule.removeChild(divv_with_flex_class)

        lessonCounters = {};
        let Modelmap = newData.find(item => item.code === moduleCode);
        let lessonmap = Modelmap.lessons.find(item => item.code === lessoncode)
        let Contentmap = lessonmap.content.find(item => item.code === ContentCode)


        const updatedData = newData.map(item => {
            if (item.code === Modelmap.code) {
                return {
                    ...item,
                    lessons: item.lessons.map(lesson => {
                        if (lesson.code === lessonmap.code) {
                            return {
                                ...lesson,
                                content: lesson.content.filter(contentItem => contentItem.code !==Contentmap.code)
                            };
                        }
                        return lesson;
                    })
                };
            }
            return item;
        });

        newData = updatedData;


        
    }
    Add_Module_bttn.style.marginTop = '5px'
    getCurriculms()
}

Add_Req_bttn.addEventListener('click', () => AddwithRemove('inp', 'Requirments'))

const Add_item_bttn = document.getElementById('add_item');
Add_item_bttn.addEventListener('click', () => AddwithRemove('inp2', "item"));

const Add_Audience_bttn = document.getElementById('add_Audience');
Add_Audience_bttn.addEventListener('click', () => AddwithRemove('inp3', 'Audience'));



const Add_level_bttn = document.getElementById('add_level');
Add_level_bttn.addEventListener('click', Addlevel);

const Add_Module_bttn = document.getElementById('add_Module');
Add_Module_bttn.addEventListener('click', AddModule);


const Save_course_bttn = document.getElementById('Save_course_bttn');
Save_course_bttn.addEventListener('click', () => {

    let inputs = document.querySelectorAll('input');
    let reqs = [];
    let items = [];
    let Audience = [];
    let level = [];
    let curriclum = [];
    let modeulesData = []

    //let curriclum = [];
    inputs.forEach((input, index) => {
        if (input.type === "checkbox") {
            console.log(`${input.name}: ${input.checked}`);

        }
        else if (input.name === 'Requirments') {
            reqs.push(input.value)


        }
        else if (input.name === 'item') {
            items.push(input.value)


        }
        else if (input.name === 'Audience') {
            Audience.push(input.value)


        }

        else if (input.classList[0] === "courseLevel") {
            let now = input;
            let next = inputs[index + 1]
            if (now.name === "level" && next.name === "price") {

                let obj = {
                    title: now.value,
                    price: next.value
                }

                level.push(obj);
            }
        }




        else {
            console.log(`${input.name}: ${input.value}`);


        }

    });
    let Category = document.querySelector('select');
    // console.log(`${Category.name}:${Category.value} `);
    let formData = {}
    formData.req = reqs
    formData.items = items
    formData.Audience = Audience
    formData.level = level
    formData.curriclum = newData
    formData.CategoryId = Category.value
    console.log(formData);

})






let newData = []
function getCurriculms() {
    let CurriculumInputs = document.querySelectorAll(".CurriculumInputs")

    CurriculumInputs.forEach((input) => {
        input.addEventListener("input", currTextInput)


    })
}

function currTextInput() {
    let input = this
    let [moduleCode, lessonCode, contentCode] = input.classList[0].split('-');

    if (input.classList.contains("Module")) {
        let map = newData.find(item => item.code === moduleCode)
        if (!map) {

            let moduleObj = {
                title: input.value,
                code: moduleCode,
                lessons: []
            }
            newData.push(moduleObj)
        } else {
            map.title = input.value
        }

    } else if (input.classList.contains("Lesson_Title")) {
        let pMap = newData.find(item => item.code === moduleCode)
        let map = pMap.lessons.find(item => item.code === lessonCode)
        if (!map) {

            let lessonObj = {
                title: input.value,
                code: lessonCode,
                content: []
            }
            pMap.lessons.push(lessonObj)
        } else {
            map.title = input.value
        }


    } else if (input.classList.contains("Lesson_Content")) {
        let ModuleMap = newData.find(item => item.code === moduleCode)
        let LessonMap = ModuleMap.lessons.find(item => item.code === lessonCode)
        let map = LessonMap.content.find(item => item.code === contentCode)
        if (!map) {

            let contentObj = {
                title: input.value,
                code: contentCode,
            }
            LessonMap.content.push(contentObj)
        } else {
            map.title = input.value
        }


    }

}

