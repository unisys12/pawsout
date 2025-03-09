import { cn } from "@/lib/utils";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";

export function RegistrationForm({ className, ...props }) {
    return (
        <div className={cn("flex flex-col gap-6", className)} {...props}>
            <Card>
                <CardHeader className="text-center">
                    <CardTitle className={cn("dark:text-slate-200")}>Create Your Organization</CardTitle>
                    <CardDescription className={cn("dark:text-slate-200")}>Enter your organizations information below to get started!</CardDescription>
                </CardHeader>
                <CardContent>
                    <form>
                        <div className="flex flex-col gap-6">
                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="organization">
                                    Organization Name
                                </Label>
                                <Input id="organization" type="text" placeholder="Wallaby Way Rescue" required />
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="address">
                                    Address
                                </Label>
                                <Input id="address" type="text" placeholder="42 Wallaby Way" required />
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="city">
                                    City
                                </Label>
                                <Input id="city" type="text" placeholder="Sydney" required />
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="state">
                                    State
                                </Label>
                                <Input id="state" type="text" placeholder="MS" required />
                                <small className="-mt-[.75rem]">Please use the abbreviated declaration of your state.</small>
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="zip">
                                    Zip Code
                                </Label>
                                <Input id="zip" type="text" placeholder="55555" required />
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="phone">
                                    Phone
                                </Label>
                                <Input id="phone" type="tel" placeholder="555-555-5555" required />
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="email">
                                    Email
                                </Label>
                                <Input id="email" type="email" placeholder="primary_contact@wallaby-way-rescue.org" required />
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="website">
                                    Website
                                </Label>
                                <Input id="website" type="url" placeholder="https://www.wallaby-way-rescue.org" required />
                            </div>

                            <div className="grid gap-3">
                                <Label className={cn("dark:text-slate-200")} htmlFor="logo">
                                    Logo
                                </Label>
                                <Input id="logo" type="file" />
                            </div>

                            <div className="flex flex-col gap-3">
                                <Button type="submit" className="w-full dark:text-slate-200">
                                    Create
                                </Button>
                            </div>
                        </div>
                        <div className="mt-4 text-center text-sm dark:text-slate-200">
                            Don&apos;t have an account?{" "}
                            <a href="#" className="underline underline-offset-4 dark:text-slate-200">
                                Sign up
                            </a>
                        </div>
                    </form>
                </CardContent>
            </Card>
        </div>
    );
}
