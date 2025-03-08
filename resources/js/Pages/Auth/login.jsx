import { LoginForm } from "@/components/login-form"

export default function Page() {
  return (
    <div className="bg-slate-200 dark:bg-gray-900">
        <header className="flex items-center justify-center">
            <h1 className="text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Paws Out!</h1>
        </header>
        <div className="flex min-h-svh w-full items-center justify-center p-6 md:p-10">
            <div className="w-full max-w-sm">
                <LoginForm />
            </div>
        </div>
    </div>

  );
}
