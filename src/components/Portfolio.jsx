const achievements = [
  {
    title: "Kelantan Education Resource Initiative for Students (KERIS)",
    role: "Co-Founder, Advisor & Former Co-Director",
    image: "https://piqimbucket.s3.ap-southeast-1.amazonaws.com/keris.jpg",
    description:
      "Co-founded, advised and led an organization focused on scholarship exposure for rural Kelantan students, launching an annual Mock Interview program.",
    date: "April 2023 - Present"
    },
  {
    title: "Engineers Without Borders (EWB) @ UCSD",
    role: "Project Co-Lead",
    image: "",
    description:
      "Led a team for a project, Project K–12, that promote STEM, and engineering workshops across San Diego County especially for underrepresented minorities in San Diego.",
    date: "January 2026 - Present"
    },
  {
    title: "Association for Computing Machinery (ACM) - Hack @ UCSD",
    role: "Mentor Developer",
    image: "",
    description:
      "Mentored students in a quarter-long full-stack mobile development bootcamp covering JavaScript, React, Next.js, Express, and Vercel, with guidance.",
    date: "October 2025 - December 2025"
    },
    {
    title: "Badminton Varsity Team @ Mount Carmel High School, San Diego",
    role: "Assistant Coach",
    image: "",
    description:
    "Assisted the head coach in coaching varsity players for the 26/27 season in the local San Diego County division with drills, strategic planning, and match analysis.",
    date: "February 2026 - Current"
    },
  {
    title: "Malaysian Student Association (MYSA) @ UCSD",
    role: "Treasurer",
    image: "https://piqimbucket.s3.ap-southeast-1.amazonaws.com/mysa.jpg",
    description:
      "Managed budgeting and financial planning and oversaw resource allocation for events targeting Malaysian student community.",
    date: "March 2025 - February 2026"
  },
  {
    title: "The Food Cooperative @ UCSD",
    role: "Volunteer Finance Staff",
    image: "",
    description:
      "Handled point-of-sale operations, transaction records, and sales tax compliance while organizing financial data for a student-run cooperative.",
    date: "April 2025 - October 2025"
    },
  {
    title: "Peer Support Group (PSG) @ KYUEM",
    role: "Multimedia Executive Committee",
    image: "https://piqimbucket.s3.ap-southeast-1.amazonaws.com/psg.jpg",
    description:
      "Produced digital media and communications materials for peer mental health support initiatives and student engagement.",
    date: "June 2023 - May 2024",
  },
  {
    title: "UCSD Badminton Club @ UCSD",
    role: "Team Player",
    image: "https://piqimbucket.s3.amazonaws.com/bruin.jpg",
    description:
      "Represented UC San Diego in intercollegiate badminton competitions and tournaments (UCLA Bruin Open 2024, UCI Anteater Open (2025), UCSD Sun God Open (2025), etc).",
    date: "October 2024 - June 2025",
    },
  {
    title: "KY Badminton (KYBAD) @ KYUEM",
    role: "Team Player",
    image: "",
    description:
      "Competed in intercollege badminton tournaments as part of KYUEM’s varsity badminton team.",
    date: "January 2023 - June 2024",
  },
  {
    title: "KY Computing Society @ KYUEM",
    role: "Volunteer Instructor",
    image: "https://piqimbucket.s3.ap-southeast-1.amazonaws.com/webclass.jpg",
    description:
      "Taught introductory web development to a class of 20 students, covering HTML, CSS, and JavaScript fundamentals.",
    date: "September 2022 - November 2022",
  },
  {
    title: "Yayasan Khazanah Global Scholarship Award",
    role: "Scholarship Recipient",
    image: "https://piqimbucket.s3.ap-southeast-1.amazonaws.com/yk.jpg",
    description:
      "Awarded a competitive global scholarship in recognition of academic excellence and leadership.",
      date: "August 2022",
  },
  {
    title: "Academic Top Achiever Award @ SMK Bachok (Highschool)",
    role: "Highest SPM Result and Academic Award",
    image: "https://piqimbucket.s3.ap-southeast-1.amazonaws.com/spm.jpg",
    description:
      "Received recognition for achieving the highest SPM result in school history.",
      date: "December 2021",
  },
];

const Portfolio = () => {
  return (
    <section id="portfolio" className="bg-white py-10 px-4 md:px-10">
      <div className="max-w-7xl mx-auto">
        <h1 className="text-3xl font-bold text-center text-gray-800 mb-6">
          Clubs, Sports, and Awards Portfolio
        </h1>
        <p className="text-lg text-center text-gray-600 mb-12">
          There are a handful of achievements, awards, and fun activities that
          I'm quite proud of. In the future, I do sincerely hope I get more
          daring opportunities to deepen my knowledge and gain more experience.
          With that said, I've compiled them all as part of my portfolio so that
          you can experience them too!
        </p>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {achievements.map((achievement, index) => (
            <div
              key={index}
              className="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow"
            >
              <img
                src={achievement.image}
                alt={achievement.title}
                className="w-full h-40 object-cover rounded-t-lg mb-4"
              />
              <h3 className="text-xl font-semibold text-gray-800">
                {achievement.title}
              </h3>
              <p className="text-sm text-gray-600">{achievement.description}</p>
              <p className="mt-2 text-sm font-medium text-gray-700">
                {achievement.role}
              </p>
              <p>
                {achievement.date && (
                  <span className="text-sm text-gray-500">{achievement.date}</span>
                )}
              </p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Portfolio;
