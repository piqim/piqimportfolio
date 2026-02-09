// Projects.js
import React from "react";

const projects = [
  {
    title: "Modeling Calorie Burn in Gym-Based Exercise Sessions",
    date: "January 2026",
    description:
      "Built an R analytics pipeline and interactive Shiny app for exploratory and inferential analysis of gym activity data from 973 users.",
    link: "https://piqim.shinyapps.io",
    linkText: "View App",
  },
  {
    title: "Malaysian Condominium Price Predictive Model",
    date: "February 2026",
    description:
      "Performed descriptive analysis on web-crawled housing data and built a predictive model to analyze and forecast condominium prices in Malaysia.",
    link: "https://website.com",
    linkText: "View App",
  },
  {
    title: "Project Feeling Prepper – Mental Health Support App",
    date: "October 2025",
    description:
      "Developed a full-stack MERN web and mobile app to support mental health management using structured therapy methods and progress tracking.",
    link: "https://projectfeelingprepper.vercel.app/",
    linkText: "Visit App",
  },
  {
    title: "Scholarship Repository Website – KERIS Official Website",
    date: "March 2025",
    description:
      "Built a MERN-based platform featuring a searchable mentor directory and scholarship database to support student academic decision-making.",
    link: "https://kerismy.com",
    linkText: "Visit Site",
  },
  {
    title: "Noticias (Journalism Club) News Website",
    date: "December 2022",
    description:
      "Created a dynamic news website for a college journalism club using MySQL, HTML, and PHP.",
    link: "https://github.com/piqim/kynews",
    linkText: "Source Code",
  },
];

const Projects = () => {
  return (
    <section id="projects">
      <div className="bg-[--color-light] py-10 px-4 md:px-10">
        <div className="max-w-7xl mx-auto">
          <h1 className="text-3xl font-bold text-center text-gray-800 mb-6">
            Projects
          </h1>
          <p className="text-lg text-center text-gray-600 mb-12">
            Though I've had my stints with Badminton, Scholarship preaching, and
            many more, I never forget to practice, learn, and improve on my
            coding prowess. This collection of personal and commissioned projects spans data analytics, machine learning, and full-stack web development. It includes predictive modeling and statistical analysis in R, MERN-based web and mobile applications, and dynamic database-driven websites, focused on real-world domains such as health, education, housing, and journalism.
          </p>

          <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
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

          <p className="text-center text-gray-600 mt-8">--- <a href="https://github.com/piqim" className="hover:text-blue-700">Click here to see more on my GitHub Profile</a> ---</p>
        </div>
      </div>
    </section>
  );
};

export default Projects;
