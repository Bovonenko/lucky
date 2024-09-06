import Axios from "axios";
import { setupCache } from "axios-cache-interceptor";

const instance = Axios.create();
const axios = setupCache(instance);
// console.log(response.cached);

/** @returns {Promise<Post>} */
const featuredPost = async () => {
	return axios
		.get("https://jsonplaceholder.typicode.com/posts/1")
		.then((response) => {
			return response.data;
		});
};

/** @returns {Promise<Post[]>} */
const allPosts = async () => {
	return axios
		.get("https://jsonplaceholder.typicode.com/posts")
		.then((response) => {
			return response.data;
		});
};

/** @returns {Promise<Post>} */
const postById = async (id) => {
	return axios
		.get(`https://jsonplaceholder.typicode.com/posts/${id}`)
		.then((response) => {
			return response.data;
		});
};

export { allPosts, postById, featuredPost };
