// Portfolio.js
import React from 'react';

const achievements = [
  {
    title: 'Kelantan Education Resource Initiative for Students (KERIS)',
    role: 'Founder and Co-Director',
    image: '../src/assets/img/portfolio/keris.jpg',
    description: 'Photoshoot of Piqim, and the high commitee members',
  },
  {
    title: 'Malaysian Student Association (MYSA) @ UC San Diego',
    role: 'Treasurer',
    image: '../src/assets/img/portfolio/mysa.jpg',
    description: 'Informal photoshoot of Piqim and the MYSA commitee members during Eid Mubarak celebration with NIMSA.',
  },
  {
    title: 'Yayasan Khazanah Global Scholarship',
    role: 'Scholar',
    image: '../src/assets/img/portfolio/yk.jpg',
    description: 'Piqim receiving the Yayasan Khazanah Global Scholarship during Awards Day 2022',
  },
  {
    title: 'Intercollege Badminton Tournament',
    role: 'Player',
    image: '../src/assets/img/portfolio/bruin.jpg',
    description: 'Piqim playing badminton at the 2024 Bruin Open, UCLA for UCSD',
  },
  {
    title: 'Web Development Class for Students',
    role: 'Instructor for the Class',
    image: '../src/assets/img/portfolio/webclass.jpg',
    description: 'Piqim posing in a photo with the students in the Web Development Class',
  },
  {
    title: 'Peer Support Group (PSG), KYUEM',
    role: 'Hicom Member',
    image: '../src/assets/img/portfolio/psg.jpg',
    description: 'Piqim in a high commitee photoshoot as Peer Support Group`s 23/24 Multimedia Exco',
  },
  {
    title: 'MUSCOM KYUEM Outreach Camp',
    role: 'Participant of the Camp',
    image: '../src/assets/img/portfolio/muscom.jpg',
    description: 'Piqim participation\'s in Muscom Outreach Program',
  },
  {
    title: 'Malay Cultural Night 2023',
    role: 'Performer',
    image: '../src/assets/img/portfolio/dikir.jpg',
    description: 'Piqim participation in Malay Cultural Night for Dikir Barat',
  },
  {
    title: 'SMK Bachok Top Achiever Award',
    role: 'Highest SPM Result and Academic Reward',
    image: '../src/assets/img/portfolio/spm.jpg',
    description: 'Piqim receiving highest SPM Results in high school history',
  },
];

const Portfolio = () => {
  return (
    <section id="portfolio" className="bg-[--color-light] py-10 px-4 md:px-10">
      <div className="max-w-7xl mx-auto">
        <h1 className="text-3xl font-bold text-center text-gray-800 mb-6">Portfolio</h1>
        <p className="text-lg text-center text-gray-600 mb-12">
          There are a handful of achievements, awards, and fun activities that I'm quite proud of. In the future, I do sincerely hope I get more daring opportunities to deepen my knowledge and gain more experience. With that said, I've compiled them all as part of my portfolio so that you can experience them too!
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
              <h3 className="text-xl font-semibold text-gray-800">{achievement.title}</h3>
              <p className="text-sm text-gray-600">{achievement.description}</p>
              <p className="mt-2 text-sm font-medium text-gray-700">{achievement.role}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Portfolio;
