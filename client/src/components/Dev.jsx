import React from "react";

const Dev = () => {
  return (
      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-6 max-w-7xl">

        <div className="max-w-sm w-full bg-white rounded-2xl shadow-lg overflow-hidden">
        <img src={profile_pic} alt="Profile" className="w-full h-48 object-cover" />
        <div className="p-4">
          <h2 className="text-xl font-semibold flex items-center gap-2">
            <span role="img" aria-label="camera">📸</span> Taw Lee Lik
          </h2>
          <div className="mt-2 flex flex-wrap gap-2">
            <span className="bg-green-600 text-white text-sm px-3 py-1 rounded-md">
              Yayasan Khazanah
            </span>
            <span className="bg-purple-600 text-white text-sm px-3 py-1 rounded-md">
              Mathematics - Computer Science
            </span>
            <span className="bg-gray-600 text-white text-sm px-3 py-1 rounded-md">
              Undergraduate Degree
            </span>
          </div>
          <p className="mt-3 text-gray-600 text-sm">mbinburhanuddin@gmail.com</p>
        </div>
        </div>

        


      </div>
  );
};

export default Dev;
