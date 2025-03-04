// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
import { getDatabase, ref, get, set } from "firebase/database";

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyARjvBDXJ68ArNd1UGwV1Xu3rwUyYYISNM",
  authDomain: "quizz-f73b5.firebaseapp.com",
  projectId: "quizz-f73b5",
  storageBucket: "quizz-f73b5.firebasestorage.app",
  messagingSenderId: "139112130782",
  appId: "1:139112130782:web:eaf4ecf3df4d1010c3fa4f",
  measurementId: "G-SVF20BSW89"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const database = getDatabase(app);

let score = 0;
let currentQuestionIndex = 0;
let questions = [];

// Fetch questions from Firebase
const questionsRef = ref(database, 'questions');
get(questionsRef).then((snapshot) => {
    if (snapshot.exists()) {
        questions = snapshot.val();
        displayQuestion();
    } else {
        console.log("No data available");
    }
}).catch((error) => {
    console.error("Error fetching questions: ", error);
});

function displayQuestion() {
    const questionKey = Object.keys(questions)[currentQuestionIndex];
    const questionData = questions[questionKey];

    const quizContainer = document.getElementById('quiz-container');
    quizContainer.innerHTML = `
        <h2>${questionData.question}</h2>
        <ul>
            <li><input type="radio" name="option" value="a"> ${questionData.options.a}</li>
            <li><input type="radio" name="option" value="b"> ${questionData.options.b}</li>
            <li><input type="radio" name="option" value="c"> ${questionData.options.c}</li>
            <li><input type="radio" name="option" value="d"> ${questionData.options.d}</li>
        </ul>
    `;
}

document.getElementById('submit').addEventListener('click', () => {
    const selectedOption = document.querySelector('input[name="option"]:checked');
    if (selectedOption) {
        const questionKey = Object.keys(questions)[currentQuestionIndex];
        if (selectedOption.value === questions[questionKey].answer) {
            score++;
        }
        currentQuestionIndex++;
        if (currentQuestionIndex < Object.keys(questions).length) {
            displayQuestion();
        } else {
            displayResult();
        }
    } else {
        alert("Veuillez sélectionner une réponse !");
    }
});

function displayResult() {
    const resultContainer = document.getElementById('result');
    resultContainer.innerHTML = `<h2>Votre score: ${score}</h2>`;
    
    // Save score to Firebase
    const userId = "user" + Date.now(); // Generate a unique user ID
    const scoresRef = ref(database, 'scores/' + userId);
    set(scoresRef, {
        name: "Joueur " + userId,
        score: score
    }).then(() => {
        console.log("Score enregistré avec succès !");
    }).catch((error) => {
        console.error("Erreur lors de l'enregistrement du score: ", error);
    });
}