import React from "react";

const About = () => {
  return (
    <div className="px-4 md:px-10">
      {/* About Header */}
      <section id="about" className="text-center py-10">
        <h1 className="text-3xl font-bold text-gray-800">About</h1>
        <p className="mt-4 text-gray-600">
          Mustaqim, also known as Piqim, a devoted first year undergraduate student studying Mathematics - Computer Science
          at the University of California, San Diego under the Yayasan Khazanah Scholarship. My unwavering
          passion for programming has fueled my ambition to pursue a career in
          the field of mathematics, and computer science. Not to mention, I love badminton, drawing, gaming, and socializing,
          so please don't hesitate to hit me up!
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
                <p>An online portfolio of me.</p>
              </aside>
              <aside className="p-4 bg-gray-100 rounded-lg">
                <strong>Who is this site for?</strong>
                <p>Everyone is welcomed!</p>
              </aside>
              <aside className="p-4 bg-gray-100 rounded-lg">
                <strong>What else do you enjoy to do?</strong>
                <p>Badminton, listening to music and eating.</p>
              </aside>
              <aside className="p-4 bg-gray-100 rounded-lg">
                <strong>What is the meaning of life?</strong>
                <p>I heard it's only 42!</p>
              </aside>
              <aside className="p-4 bg-gray-100 rounded-lg">
                <strong>What are your future plans?</strong>
                <p>
                  Surviving 4 years of university, getting a girlfriend, and securing an internship, please ...
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
                <span>Programming (Java, Python, C++)</span> <span>75%</span>
              </div>
              <div className="w-full bg-gray-200 rounded-full h-2.5">
                <div
                  className="bg-blue-500 h-2.5 rounded-full"
                  style={{ width: "75%" }}
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
                <span>Database Management (MySQL, NoSQL - MongoDB)</span> <span>80%</span>
              </div>
              <div className="w-full bg-gray-200 rounded-full h-2.5">
                <div
                  className="bg-green-500 h-2.5 rounded-full"
                  style={{ width: "80%" }}
                ></div>
              </div>

              <div className="flex justify-between text-gray-700">
                <span>Data Analysis and Algorithm Development (MatLab)</span> <span>60%</span>
              </div>
              <div className="w-full bg-gray-200 rounded-full h-2.5">
                <div
                  className="bg-purple-500 h-2.5 rounded-full"
                  style={{ width: "60%" }}
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

              <div className="flex justify-between text-gray-700">
                <span>Machine Learning (TensorFlow)</span> <span>30%</span>
              </div>
              <div className="w-full bg-gray-200 rounded-full h-2.5">
                <div
                  className="bg-pink-500 h-2.5 rounded-full"
                  style={{ width: "30%" }}
                ></div>
              </div>

              <div className="pt-10 flex justify-between">
                <a className="text-blue-500 hover:text-blue-800 hover:underline" href="https://piqimbucket.s3.ap-southeast-1.amazonaws.com/resume.pdf" download>Click here to download my CV!</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
};

export default About;
