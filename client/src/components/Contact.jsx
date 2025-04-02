// ContactMe.js
import React from 'react';

const Contact = () => {
  const contactMethods = [
    {
      name: 'LinkedIn',
      url: 'https://www.linkedin.com/in/your-profile', // Update with your LinkedIn URL
    },
    {
      name: 'Instagram',
      url: 'https://www.instagram.com/your-profile', // Update with your Instagram URL
    },
    {
      name: 'Facebook',
      url: 'https://www.facebook.com/your-profile', // Update with your Facebook URL
    },
    {
      name: 'GitHub',
      url: 'https://github.com/your-username', // Update with your GitHub URL

    },
  ];

  return (
    <div className="bg-[--color-light] py-10 px-4 md:px-10">
      <div className="max-w-7xl mx-auto">
        <h1 className="text-3xl font-bold text-center text-gray-800 mb-6">Contact Me</h1>

        {/* Email and Phone Section */}
        <div className="flex flex-wrap justify-center mb-8 space-x-8">
          <div className="text-md">
            <p>Email: <a href="mailto:mbinburhanuddin@gmail.com" className="text-blue-500">mbinburhanuddin@gmail.com</a></p>
          </div>
          <div className="text-md">
            <p>Phone: <a href="tel:+16195340245" className="text-blue-500">+1 619 534 0245</a></p>
          </div>
        </div>

        {/* Social Media Buttons */}
        <div className="flex flex-wrap justify-center gap-6">
          {contactMethods.map((method, index) => (
            <a
              key={index}
              href={method.url}
              className="flex items-center justify-center hover:underline"
              target="_blank"
              rel="noopener noreferrer"
            >
              <span className="text-xs md:text-sm">{method.name}</span>
            </a>
          ))}
        </div>
      </div>
    </div>
  );
};

export default Contact;
