import React from "react";

const About = () => {
  return (
    <div className="px-4 md:px-10">
      {/* About Header */}
      <section id="about" className="text-center py-10">
        <h1 className="text-3xl font-bold text-gray-800">About</h1>
        <p className="mt-4 text-gray-600">
          My name is Mustaqim, or Piqim, I am a Mathematics-Computer Science student at UC San Diego from Malaysia with a strong passion for statistics, data science, software, and mental health. 
          As a Yayasan Khazanah (Sovereign Wealth Fund of Malaysia) scholar, I have refined my leadership, problem-solving, and communication skills, enabling me to manage projects and collaborate effectively with teams. 
          I am eager to apply my software development and data analysis expertise to develop my skills and make impactful contributions.
          Do check out my projects, involvements and experiences, and feel free to reach out if you want to connect or have any questions! Ad Victoriam!
        </p>

        {/* Skillset and FAQ Section */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
          {/* FAQ */}
          <div className="bg-white p-6 rounded-lg shadow">
            <h2 className="text-xl font-semibold text-gray-800">
              W E L C O M E
            </h2>
            <div className="mt-4 space-y-4">
              <aside className="p-4 bg-gray-100 rounded-lg">
                <strong>What is this site?</strong>
                <p>A more detailed portfolio of myself.</p>
              </aside>
              <aside className="p-4 bg-gray-100 rounded-lg">
                <strong>Who is this site for?</strong>
                <p>Professors, potential employers, friends and family!</p>
              </aside>
              <aside className="p-4 bg-gray-100 rounded-lg">
                <strong>What else do you enjoy to do?</strong>
                <p>Riding my motorcycle, sports, cooking and traveling.</p>
              </aside>
              <aside className="p-4 bg-gray-100 rounded-lg">
                <strong>What are your future plans?</strong>
                <p>
                  Surviving 4 years of university, and getting an internship.
                </p>
              </aside>
            </div>
          </div>

          {/* Skillset */}
          <div className="bg-white p-6 rounded-lg shadow">
          <h2 className="text-xl font-semibold text-gray-800">
              S K I L L S E T
            </h2>
            <div className="mt-4 space-y-4">
              <div className="flex justify-between text-gray-700">
                <span>Data Analysis and Statistical Inference (MatLab, Pandas, R)</span> <span>75%</span>
              </div>
              <div className="w-full bg-gray-200 rounded-full h-2.5">
                <div
                  className="bg-purple-500 h-2.5 rounded-full"
                  style={{ width: "75%" }}
                ></div>
              </div>

              <div className="flex justify-between text-gray-700">
              <span>Database Management (MySQL, NoSQL - MongoDB)</span> <span>70%</span>
              </div>
              <div className="w-full bg-gray-200 rounded-full h-2.5">
                <div
                  className="bg-green-500 h-2.5 rounded-full"
                  style={{ width: "70%" }}
                ></div>
              </div>

              <div className="flex justify-between text-gray-700">
              <span>Fullstack Development (MERN Stack, PHP, HTML, CSS)</span> <span>90%</span>
              </div>
              <div className="w-full bg-gray-200 rounded-full h-2.5">
                <div
                  className="bg-yellow-500 h-2.5 rounded-full"
                  style={{ width: "90%" }}
                ></div>
              </div>

              <div className="flex justify-between text-gray-700">
                <span>Programming (Java, Python, C++)</span> <span>75%</span>
              </div>
              <div className="w-full bg-gray-200 rounded-full h-2.5">
                <div
                  className="bg-blue-500 h-2.5 rounded-full"
                  style={{ width: "75%" }}
                ></div>
              </div>

              <div className="flex justify-between text-gray-700">
                <span>Microsoft Office (Word, Excel)</span> <span>90%</span>
              </div>
              <div className="w-full bg-gray-200 rounded-full h-2.5">
                <div
                  className="bg-red-500 h-2.5 rounded-full"
                  style={{ width: "90%" }}
                ></div>
              </div>

              <div className="pt-10 flex justify-between">
                <a className="text-blue-500 hover:text-blue-800 hover:underline" href="https://drive.google.com/file/d/1fojyDZIfsVicqZvt7k-sLCKuW9aJKRu-/view?usp=sharing">Click here to see my CV!</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
};

export default About;
