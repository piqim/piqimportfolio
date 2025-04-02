// Projects.js
import React from "react";

const projects = [
  {
    title: "KERIS Official Webapp",
    date: "March 2025",
    description:
      "Designed, coded and published the official webapp using MERN Stack for Kelantan Educational Resource Initiative for Students. The website provides information regarding scholarships that is targeted towards deserving post-SPM students in Kelantan.",
    link: "https://github.com/piqim/kerisfullstack", // Update this with actual link
    linkText: "Cat Call the Site",
  },
  {
    title: "Academic Drive Access Point",
    date: "June 2023",
    description:
      "Made a simple access point for KYUEM students to access a Google Drive folder that contains resources to assist them for A-Levels.",
    link: "https://ky-acad.netlify.app/", // Update this with actual link
    linkText: "Take a Peek",
  },
  {
    title: "College Student Council Website",
    date: "March 2023",
    description:
      "Designed and coded a fully dynamic web system for the college's student council as a mock-up and demo.",
    link: "https://github.com/piqim/kysc", // Update this with actual link
    linkText: "Source Code",
  },
  {
    title: "KYUEM Computing Society Website",
    date: "February 2023",
    description:
      "Made a simple demo website for the College Computing society.",
    link: "https://piqim.github.io/kycs/", // Update this with actual link
    linkText: "Check it Out",
  },

  {
    title: "Kyuem Noticias Website",
    date: "December 2022",
    description:
      "Coded a fully dynamic news website for the college's Journalism club using MySQL, HTML, PHP and other languages to make it fully functional.",
    link: "https://github.com/piqim/kynews", // Update this with actual link
    linkText: "Source Code",
  },
  {
    title: "BASE Website",
    date: "December 2022",
    description:
      "This website was originally created by Irfan Ezani for BASE Initiative, I work as the current IT Officer to further improve the website.",
    link: "https://baseinitiativemy.com/", // Update this with actual link
    linkText: "Visit the Site",
  },
];

const Projects = () => {
  return (
    <section id="projects">
      <div className="bg-white py-10 px-4 md:px-10">
        <div className="max-w-7xl mx-auto">
          <h1 className="text-3xl font-bold text-center text-gray-800 mb-6">
            Projects
          </h1>
          <p className="text-lg text-center text-gray-600 mb-12">
            Though I've had my stints with Badminton, Scholarship preaching, and
            many more, I never forget to practice, learn, and improve on my
            coding prowess. I've done a number of personal and work-related
            projects, you are more than welcome to check them out!
          </p>

          <div className="space-y-8">
            {projects.map((project, index) => (
              <div
                key={index}
                className="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow"
              >
                <h3 className="text-2xl font-semibold text-gray-800">
                  {project.title}
                </h3>
                <p className="text-sm text-gray-500 mb-2">{project.date}</p>
                <p className="text-sm text-gray-600 mb-4">
                  {project.description}
                </p>
                <a
                  href={project.link}
                  className="text-blue-500 hover:text-blue-700 font-semibold"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  {project.linkText}
                </a>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default Projects;
