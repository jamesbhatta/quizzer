import ExampleComponent from './components/ExampleComponent'
import App from './components/App'
import Dashboard from './components/Dashboard'
import Course from './components/Course'

export default{
	mode: 'history',

	routes: [
	{
		path: '/dashboard/',
		component: App,
		children: [
		{
			path: '',
			name: 'dashboard',
			component: Dashboard
		},
		{
			path: 'course',
			name: 'course',
			component: Course
		}
		]
	}
	]
}